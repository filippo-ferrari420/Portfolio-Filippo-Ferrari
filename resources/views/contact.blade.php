<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p class="section-subtitle">連絡する (Contact Me)</p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info mb-5">
                    <h3 class="mb-4">Contact Information</h3>
                    
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <span class="display-6">📧</span>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p>your.email@example.com</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <span class="display-6">📱</span>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p>+1 (123) 456-7890</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <span class="display-6">📍</span>
                        </div>
                        <div>
                            <h5>Location</h5>
                            <p>Tokyo, Japan</p>
                        </div>
                    </div>
                    
                    <div class="social-links mt-5">
                        <h5 class="mb-3">Connect With Me</h5>
                        <div class="d-flex">
                            <a href="#" class="me-3 social-icon">GitHub</a>
                            <a href="#" class="me-3 social-icon">LinkedIn</a>
                            <a href="#" class="me-3 social-icon">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="contact-form">
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

<div class="japanese-section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p class="section-subtitle">よくある質問 (FAQs)</p>
        </div>
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What services do you offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                I specialize in backend development using Laravel. My services include building web applications, RESTful APIs, database design, and integration with frontend frameworks.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How long does it take to complete a project?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Project timelines vary depending on complexity and requirements. A simple website might take 2-4 weeks, while more complex applications can take several months. I'll provide a detailed timeline after understanding your specific needs.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer maintenance services after project completion?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, I offer maintenance packages to ensure your application stays up-to-date and secure. This includes regular updates, bug fixes, and performance optimizations.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How do we start working together?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The process starts with a consultation to understand your requirements. After that, I'll provide a proposal with timeline and cost estimates. Once approved, we'll begin the development process with regular updates and feedback sessions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-main>