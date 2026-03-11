<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - InstantPay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1e293b;
            --sidebar-bg: #212529;
            --sidebar-hover: #343a40;
        }
        body { background-color: #f8f9fa; }
        .sidebar {
            min-height: 100vh;
            background-color: var(--sidebar-bg);
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 100;
        }
        .sidebar .nav-link {
            color: #adb5bd;
            padding: 12px 20px;
            border-left: 3px solid transparent;
        }
        .sidebar .nav-link:hover {
            background-color: var(--sidebar-hover);
            color: #fff;
        }
        .sidebar .nav-link.active {
            background-color: var(--sidebar-hover);
            border-left-color: var(--primary-color);
            color: #fff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar-brand {
            color: var(--primary-color) !important;
            font-size: 1.5rem;
            font-weight: 800;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-primary:hover {
            background-color: #c01f23;
            border-color: #c01f23;
        }
        .badge-primary { background-color: var(--primary-color); }
        .text-primary { color: var(--primary-color) !important; }
        .top-header {
            background: #fff;
            padding: 15px 30px;
            margin: -20px -20px 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="p-4">
                <a href="{{ url('/') }}" class="navbar-brand text-decoration-none">InstantPay</a>
                <p class="text-muted small mt-1 mb-0">Admin Panel</p>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-chart-line me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                        <i class="fas fa-users me-2"></i> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.blog-posts.*') ? 'active' : '' }}" href="{{ route('admin.blog-posts.index') }}">
                        <i class="fas fa-blog me-2"></i> Blog Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.comments.*') ? 'active' : '' }}" href="{{ route('admin.comments.index') }}">
                        <i class="fas fa-comments me-2"></i> Comments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
                        <i class="fas fa-envelope me-2"></i> Contacts
                        @if(isset($unread_count) && $unread_count > 0)
                            <span class="badge bg-danger rounded-pill float-end">{{ $unread_count }}</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.visitors.*') ? 'active' : '' }}" href="{{ route('admin.visitors.index') }}">
                        <i class="fas fa-chart-bar me-2"></i> Visitors
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.subscribers.*') ? 'active' : '' }}" href="{{ route('admin.subscribers.index') }}">
                        <i class="fas fa-envelope-open-text me-2"></i> Subscribers
                    </a>
                </li>
                <li class="nav-item mt-3 border-top pt-3">
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="fas fa-home me-2"></i> Visit Site
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent text-start w-100">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content flex-fill">
            <div class="top-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-0">@yield('page-title', 'Dashboard')</h1>
                    <div>
                        <span class="me-3">{{ auth()->user()->name }}</span>
                        <span class="badge bg-danger">{{ ucfirst(auth()->user()->role) }}</span>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
