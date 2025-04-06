<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title">
            <h2>My Skills</h2>
            <p class="section-subtitle">技術 (Technical Skills)</p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Backend Development</h3>
                
                @foreach($skills as $skill)
                    @if(in_array($skill['name'], ['PHP', 'Laravel', 'MySQL', 'Git']))
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>{{ $skill['name'] }}</span>
                            <span>{{ $skill['percentage'] }}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: {{ $skill['percentage'] }}%"></div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            
            <div class="col-md-6">
                <h3 class="mb-4">Frontend Development</h3>
                
                @foreach($skills as $skill)
                    @if(in_array($skill['name'], ['HTML/CSS', 'JavaScript', 'Bootstrap']))
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>{{ $skill['name'] }}</span>
                            <span>{{ $skill['percentage'] }}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: {{ $skill['percentage'] }}%"></div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="japanese-divider"></div>

<div class="japanese-section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Learning Path</h2>
            <p class="section-subtitle">学習経路 (Learning Journey)</p>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="japanese-card h-100">
                    <div class="japanese-card-body">
                        <h5 class="japanese-card-title">Completed</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">✅ HTML, CSS, and JavaScript Fundamentals</li>
                            <li class="mb-3">✅ PHP Basics and Object-Oriented Programming</li>
                            <li class="mb-3">✅ MySQL Database Design</li>
                            <li class="mb-3">✅ Laravel Framework Basics</li>
                            <li class="mb-3">✅ Bootstrap 5 UI Framework</li>
                            <li class="mb-3">✅ Git Version Control</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="japanese-card h-100">
                    <div class="japanese-card-body">
                        <h5 class="japanese-card-title">In Progress</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">🔄 Advanced Laravel Features</li>
                            <li class="mb-3">🔄 RESTful API Development</li>
                            <li class="mb-3">🔄 Test-Driven Development</li>
                            <li class="mb-3">🔄 Laravel Fortify Authentication</li>
                            <li class="mb-3">🔄 Database Optimization</li>
                            <li class="mb-3">🔄 JavaScript Frameworks (Vue.js)</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="japanese-card h-100">
                    <div class="japanese-card-body">
                        <h5 class="japanese-card-title">Future Goals</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">📌 Docker and Containerization</li>
                            <li class="mb-3">📌 Cloud Deployment (AWS/Azure)</li>
                            <li class="mb-3">📌 Microservices Architecture</li>
                            <li class="mb-3">📌 CI/CD Pipelines</li>
                            <li class="mb-3">📌 Performance Optimization</li>
                            <li class="mb-3">📌 Security Best Practices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="japanese-section">
    <div class="container">
        <div class="section-title">
            <h2>Certifications</h2>
            <p class="section-subtitle">証明書 (Achievements)</p>
        </div>
        
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="japanese-card">
                    <div class="japanese-card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">PHP Developer Certification</h5>
                                    <p class="mb-0 text-muted">Certification Authority</p>
                                </div>
                                <span class="badge bg-primary rounded-pill">2022</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">Laravel Fundamentals</h5>
                                    <p class="mb-0 text-muted">Online Learning Platform</p>
                                </div>
                                <span class="badge bg-primary rounded-pill">2022</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">Web Development Bootcamp</h5>
                                    <p class="mb-0 text-muted">Coding Academy</p>
                                </div>
                                <span class="badge bg-primary rounded-pill">2021</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-main>