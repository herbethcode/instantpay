@extends('admin.layout')

@section('page-title', 'Newsletter Subscribers')

@section('content')
<div class="mb-4">
    <h2 class="mb-4">Newsletter Subscribers</h2>
    
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">Total Subscribers</p>
                    <h3 class="mb-0">{{ $subscribers->total() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">Active Subscribers</p>
                    <h3 class="mb-0">{{ $subscribers->where('is_active', true)->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">New This Month</p>
                    <h3 class="mb-0">{{ $subscribers->filter(fn($s) => $s->created_at->isCurrentMonth())->count() }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">All Subscribers</h5>
        <span class="badge bg-primary">{{ $subscribers->total() }} Total</span>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email Address</th>
                        <th>Status</th>
                        <th>Subscribed Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($subscribers as $index => $subscriber)
                        <tr>
                            <td>{{ $subscribers->firstItem() + $index }}</td>
                            <td>{{ $subscriber->email }}</td>
                            <td>
                                @if($subscriber->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $subscriber->created_at->format('M d, Y H:i') }}</td>
                            <td>
                                <form action="{{ route('admin.subscribers.destroy', $subscriber) }}" method="POST" class="d-inline" 
                                      onsubmit="return confirm('Are you sure you want to delete this subscriber?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">No subscribers yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    @if($subscribers->hasPages())
        <div class="card-footer">
            {{ $subscribers->links() }}
        </div>
    @endif
</div>
@endsection
