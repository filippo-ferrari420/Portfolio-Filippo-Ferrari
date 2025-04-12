<x-main>
<div class="japanese-hero ">
    <div class="hero-content">
        <h1 class="hero-title">コードの旅</h1>
        <p class="hero-subtitle">A Journey Through Backend Development</p>
        <a href="{{ route('projects') }}" class="japanese-btn ">View My Work</a>
    </div>
</div>

<div class="japanese-section ">
    <div class="container ">
        <div class="section-title fade-in">
            <h2>Welcome</h2>
            <p class="section-subtitle">始めまして (Nice to meet you)</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 slide-in-left">
                <img src="{{ asset('images/profile.png') }}" alt="Backend Developer" class="img-fluid mb-4">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center ">
                <div class="japanese-card japanese-card-body slide-in-right">
                <h3>Backend Developer</h3>
                <p>
                    Hi! nice to meet you, I'm Filippo. I'm a passionate backend developer and I'm just starting my journey in the programming world. I specialize in Laravel development and I enjoy creating robust and scalable web applications.
                </p>
                <p>
                    My approach to coding is inspired by Japanese principles of simplicity, precision, and continuous improvement (改善 - Kaizen).
                </p>
                <a href="{{ route('about') }}" class="japanese-btn align-self-start mt-3 ">Learn More About Me</a>
             </div>
            </div>
        </div>
    </div>
</div>

<div class="japanese-divider"></div>

<div class="japanese-section ">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Featured Projects</h2>
            <p class="section-subtitle">私の作品 (My Work)</p>
        </div>
        
        <div class="row">
            @foreach($projects as $project)
            <div class="col-md-6 mb-6 fade-in ">
                <div class="japanese-card h-100 ">
                    {{-- <img src="{{ asset($project['image']) }}" class="japanese-card-img" alt="{{ $project['title'] }}"> --}}
                    <div class="japanese-card-body">
                        <h5 class="japanese-card-title">{{ $project['title'] }}</h5>
                        <p class="japanese-card-text">{{ $project['description'] }}</p>
                        
                        <div class="technologies mb-3">
                            <h6>Technologies Used:</h6>
                            <div class="d-flex flex-wrap">
                                @if(isset($project['technologies']))
                                    @foreach((array)$project['technologies'] as $tech)
                                        <span class="badge bg-light text-dark me-2 mb-2 p-2">{{ $tech }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-Around">
                            <a href="{{ $project['github'] }}" class="japanese-btn" target="_blank">GitHub</a>
                            <a href="{{ $project['demo'] }}" class="japanese-btn" target="_blank">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('projects') }}" class="japanese-btn">View All Projects</a>
        </div>
    </div>
</div>

<div class="japanese-section">
    <div class="container">
        <div class="section-title fade-in">
            <h2>My Skills</h2>
            <p class="section-subtitle">技術 (Technical Skills)</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 fade-in">
                <div class="skill-item">
                    <div class="skill-name">
                        <span>PHP</span>
                        <span>75%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>Laravel</span>
                        <span>70%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 70%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>MySQL</span>
                        <span>65%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fade-in">
                <div class="skill-item">
                    <div class="skill-name">
                        <span>HTML/CSS</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>JavaScript</span>
                        <span>60%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 60%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>Bootstrap</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('skills') }}" class="japanese-btn">View All Skills</a>
        </div>
    </div>
</div>

<div class="japanese-section ">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Get In Touch</h2>
            <p class="section-subtitle">連絡する (Contact Me)</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3 slide-in-up">
                <div class="contact-form ">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control text-white " name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control text-white" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control text-white" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control text-white" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="japanese-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-main>