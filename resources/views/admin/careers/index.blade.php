@extends('admin.layout')

@section('page-title', 'Careers')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Careers</h2>
        <small class="text-muted">Job openings shown on the public /careers page</small>
    </div>
    <a href="{{ route('admin.careers.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Add Job Opening
    </a>
</div>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($careers as $career)
                        <tr>
                            <td class="fw-medium">{{ $career->title }}</td>
                            <td>{{ $career->department }}</td>
                            <td>{{ $career->location }}</td>
                            <td>{{ $career->type }}</td>
                            <td>
                                <span class="badge {{ $career->is_active ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $career->is_active ? 'Visible' : 'Hidden' }}
                                </span>
                            </td>
                            <td>{{ $career->order }}</td>
                            <td>
                                <a href="{{ route('admin.careers.edit', $career) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                <form action="{{ route('admin.careers.destroy', $career) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                No job openings yet. <a href="{{ route('admin.careers.create') }}">Add the first one</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3">
    {{ $careers->links() }}
</div>
@endsection
