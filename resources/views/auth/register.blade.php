<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Register</h2>
            <p class="section-subtitle">登録</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3 slide-in-up">
                <div class="contact-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
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

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('login') }}" class="text-decoration-none">Already have an account?</a>
                            <button type="submit" class="japanese-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                       
</x-main>