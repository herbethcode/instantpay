@extends('admin.layout')

@section('page-title', 'Contacts')

@section('content')
<div class="mb-4">
    <h2 class="mb-0">Contact Submissions</h2>
</div>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr class="{{ !$contact->is_read ? 'table-primary' : '' }}">
                            <td>
                                @if(!$contact->is_read)
                                    <span class="badge bg-primary rounded-circle" style="width: 10px; height: 10px; padding: 0;">&nbsp;</span>
                                @endif
                            </td>
                            <td class="fw-medium">{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td class="text-muted">{{ $contact->created_at->format('M d, Y H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-outline-primary me-2">View</a>
                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No contact submissions yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-4">
    {{ $contacts->links() }}
</div>
@endsection
