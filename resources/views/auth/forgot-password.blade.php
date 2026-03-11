<x-guest-layout>
    <h4 class="text-center mb-4">Forgot Password</h4>
    
    <div class="mb-4 text-muted small">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
                Email Password Reset Link
            </button>
        </div>
        
        <div class="text-center mt-3">
            <a class="text-decoration-none small" href="{{ route('login') }}">
                Back to Login
            </a>
        </div>
    </form>
</x-guest-layout>
