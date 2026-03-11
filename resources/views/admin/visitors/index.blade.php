@extends('admin.layout')

@section('page-title', 'Visitors Analytics')

@section('content')
<div class="mb-5">
    <h2 class="mb-4">Visitor Statistics</h2>
    
    <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">Total Visitors</p>
                    <h3 class="mb-0">{{ $stats['total'] }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">Today</p>
                    <h3 class="mb-0">{{ $stats['today'] }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">This Week</p>
                    <h3 class="mb-0">{{ $stats['this_week'] }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted small mb-2">This Month</p>
                    <h3 class="mb-0">{{ $stats['this_month'] }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Top Pages</h5>
            </div>
            <div class="card-body">
                @forelse($top_pages as $page)
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span>{{ Str::limit($page->url, 50) }}</span>
                        <span class="text-muted fw-semibold">{{ $page->visits }} visits</span>
                    </div>
                @empty
                    <p class="text-muted mb-0">No page data available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Recent Visitors</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>IP Address</th>
                        <th>URL</th>
                        <th>Referer</th>
                        <th>Location</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($visitors as $visitor)
                        <tr>
                            <td>{{ $visitor->ip_address }}</td>
                            <td>{{ Str::limit($visitor->url, 40) }}</td>
                            <td>{{ $visitor->referer ? Str::limit($visitor->referer, 30) : '-' }}</td>
                            <td>
                                {{ $visitor->city ? $visitor->city . ', ' : '' }}{{ $visitor->country ?? 'Unknown' }}
                            </td>
                            <td class="text-muted">{{ $visitor->created_at->format('M d, H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">No visitors tracked yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-4">
    {{ $visitors->links() }}
</div>
@endsection
