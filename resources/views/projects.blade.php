<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title">
            <h2>My Projects</h2>
            <p class="section-subtitle">私の作品 (My Work)</p>
        </div>
        
        <div class="row">
            @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="japanese-card h-100">
                    {{-- <img src="{{ asset($project['image']) }}" class="japanese-card-img" alt="{{ $project['title'] }}"> --}}
                    <div class="japanese-card-body">
                        <h5 class="japanese-card-title">{{ $project['title'] }}</h5>
                        <p class="japanese-card-text">{{ $project['description'] }}</p>
                        
                        <div class="technologies mb-3">
                            <h6>Technologies Used:</h6>
                            <div class="d-flex flex-wrap">
                                @foreach($project['technologies'] as $tech)
                                <span class="badge bg-light text-dark me-2 mb-2 p-2">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ $project['github'] }}" class="japanese-btn" target="_blank">GitHub</a>
                            <a href="{{ $project['demo'] }}" class="japanese-btn" target="_blank">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="japanese-divider"></div>

<div class="japanese-section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Project Process</h2>
            <p class="section-subtitle">プロジェクトプロセス (My Approach)</p>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="process-step text-center">
                    <div class="process-icon mb-3">
                        <span class="display-4">企画</span>
                    </div>
                    <h4>Planning</h4>
                    <p>I start by understanding requirements and planning the architecture.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-step text-center">
                    <div class="process-icon mb-3">
                        <span class="display-4">設計</span>
                    </div>
                    <h4>Design</h4>
                    <p>Next, I design the database structure and API endpoints.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-step text-center">
                    <div class="process-icon mb-3">
                        <span class="display-4">開発</span>
                    </div>
                    <h4>Development</h4>
                    <p>I implement the backend logic and integrate with the frontend.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-step text-center">
                    <div class="process-icon mb-3">
                        <span class="display-4">試験</span>
                    </div>
                    <h4>Testing</h4>
                    <p>Finally, I thoroughly test the application and deploy it.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="japanese-section">
    <div class="container">
        <div class="section-title">
            <h2>Interested in Collaboration?</h2>
            <p class="section-subtitle">協力に興味がありますか？</p>
        </div>
        
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <p class="mb-4">
                    I'm always open to new opportunities and collaborations. If you have a project in mind or just want to connect, feel free to reach out!
                </p>
                <a href="{{ route('contact') }}" class="japanese-btn">Contact Me</a>
            </div>
        </div>
    </div>
</div>

</x-main>