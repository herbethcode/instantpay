@extends('admin.layout')

@section('page-title', 'Contact Details')

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Contact Submission</h5>
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <label class="form-label text-muted small">Name</label>
                    <p class="h5">{{ $contact->name }}</p>
                </div>

                <div class="mb-4">
                    <label class="form-label text-muted small">Email</label>
                    <p class="h5">
                        <a href="mailto:{{ $contact->email }}" class="text-decoration-none">{{ $contact->email }}</a>
                    </p>
                </div>

                @if($contact->phone)
                    <div class="mb-4">
                        <label class="form-label text-muted small">Phone</label>
                        <p class="h5">
                            <a href="tel:{{ $contact->phone }}" class="text-decoration-none">{{ $contact->phone }}</a>
                        </p>
                    </div>
                @endif

                <div class="mb-4">
                    <label class="form-label text-muted small">Subject</label>
                    <p class="h5">{{ $contact->subject }}</p>
                </div>

                <div class="mb-4">
                    <label class="form-label text-muted small">Message</label>
                    <div class="p-3 bg-light rounded">
                        {{ $contact->message }}
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-4 border-top">
                    <div>
                        <label class="form-label text-muted small">Received</label>
                        <p class="mb-0">{{ $contact->created_at->format('F d, Y \a\t H:i') }}</p>
                    </div>
                    <div>
                        <span class="badge {{ $contact->is_read ? 'bg-success' : 'bg-primary' }}">
                            {{ $contact->is_read ? 'Read' : 'New' }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                    Back to Contacts
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
