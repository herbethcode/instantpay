<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\VisitorController;use App\Http\Controllers\Admin\SubscriberController;use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Public Pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|max:20',
        'subject' => 'required|max:255',
        'company' => 'nullable|max:255',
        'message' => 'required|max:2000',
    ]);

    // Save to database
    \App\Models\Contact::create($validated);

    return back()->with('success', 'Thank you for contacting us! We will get back to you within 24 hours.');
})->name('contact.submit');

// Newsletter Subscription
Route::post('/newsletter/subscribe', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'email' => 'required|email|max:255|unique:subscribers,email',
    ]);

    \App\Models\Subscriber::create($validated);

    return back()->with('success', 'Successfully subscribed to our newsletter!');
})->name('newsletter.subscribe');

// Public Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/comment', [BlogController::class, 'storeComment'])->name('blog.comment.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('users', UserController::class);
    Route::resource('blog-posts', BlogPostController::class);
    Route::delete('post-images/{image}', [BlogPostController::class, 'deleteImage'])->name('post-images.destroy');
    Route::patch('post-images/{image}/toggle', [BlogPostController::class, 'toggleImageStatus'])->name('post-images.toggle');
    
    Route::get('comments', [CommentController::class, 'index'])->name('comments.index');
    Route::patch('comments/{comment}/approve', [CommentController::class, 'approve'])->name('comments.approve');
    Route::patch('comments/{comment}/unapprove', [CommentController::class, 'unapprove'])->name('comments.unapprove');
    Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
    Route::get('visitors', [VisitorController::class, 'index'])->name('visitors.index');
    Route::get('subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
    Route::delete('subscribers/{subscriber}', [SubscriberController::class, 'destroy'])->name('subscribers.destroy');
});

require __DIR__.'/auth.php';
