<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Get In Touch</h2>
            <p class="section-subtitle">連絡する (Contact Me)</p>
        </div>
        
        <div class="row">
            
            <div class="col-md-6 ">
                <div class="contact-info mb-5 ">
                    <div class="japanese-card japanese-card-body slide-in-left">
                    <h3 class="mb-4">Contact Information</h3>
                    
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <span class="display-6">📧</span>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p>filippoferrari120@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <span class="display-6">📱</span>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p>+39 329 571 7988</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <span class="display-6">📍</span>
                        </div>
                        <div>
                            <h5>Location</h5>
                            <p>Sora, Frosinone , Italy</p>
                        </div>
                    </div>
                    
                   
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="contact-form slide-in-up">
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <h3 class="mb-4">Send Me a Message</h3>
                    
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="japanese-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="japanese-divider"></div>


</x-main>