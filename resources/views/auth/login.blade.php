<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Login</h2>
            <p class="section-subtitle">ログイン</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3 slide-in-up">
                <div class="contact-form">
                    @if(session('status'))
                        <div class="alert alert-success mb-4">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="japanese-btn">login</button>
                        
                        <div class="mt-4 text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-main>