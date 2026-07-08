<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    /**
     * Talks to the saas_chatbot Django API using the same API key issued
     * to the website widget — the widget and this admin panel are just two
     * different clients of the same business-scoped key.
     */
    protected function client()
    {
        return Http::withHeaders([
            'Authorization' => 'Api-Key ' . config('services.chatbot.api_key'),
        ])->baseUrl(config('services.chatbot.api_base'));
    }

    public function index()
    {
        $response = $this->client()->get('/chat/conversations/');

        if ($response->failed()) {
            return view('admin.chat.index', [
                'conversations' => [],
                'error' => 'Could not reach the chatbot service. Make sure it is running.',
            ]);
        }

        return view('admin.chat.index', [
            'conversations' => $response->json(),
            'error' => null,
        ]);
    }

    public function show(string $id)
    {
        $response = $this->client()->get("/chat/conversations/{$id}/");

        if ($response->status() === 404) {
            abort(404);
        }

        if ($response->failed()) {
            return redirect()->route('admin.chat.index')
                ->with('error', 'Could not reach the chatbot service. Make sure it is running.');
        }

        return view('admin.chat.show', [
            'conversation' => $response->json(),
        ]);
    }

    /** JSON endpoint the transcript view polls to pick up new messages live. */
    public function messages(string $id)
    {
        $response = $this->client()->get("/chat/conversations/{$id}/");

        if ($response->failed()) {
            return response()->json(['detail' => 'Unavailable'], 503);
        }

        return response()->json($response->json());
    }

    public function reply(Request $request, string $id)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:4000',
        ]);

        $response = $this->client()->post("/chat/conversations/{$id}/reply/", [
            'message' => $validated['message'],
            'agent_name' => auth()->user()->name,
        ]);

        if ($response->failed()) {
            return back()->with('error', 'Could not send reply. Make sure the chatbot service is running.');
        }

        return back()->with('success', 'Reply sent.');
    }

    public function handoff(Request $request, string $id)
    {
        $handledBy = $request->input('handled_by') === 'human' ? 'human' : 'bot';

        $response = $this->client()->post("/chat/conversations/{$id}/handoff/", [
            'handled_by' => $handledBy,
            'agent_name' => $handledBy === 'human' ? auth()->user()->name : '',
        ]);

        if ($response->failed()) {
            return back()->with('error', 'Could not update this conversation.');
        }

        $message = $handledBy === 'bot'
            ? 'Conversation handed back to the bot.'
            : 'Conversation claimed — the bot will stay quiet until you hand it back.';

        return back()->with('success', $message);
    }
}
