<x-main>
<div class="japanese-section">
    <div class="container">
        <div class="section-title">
            <h2>Dashboard</h2>
            <p class="section-subtitle">ダッシュボード</p>
        </div>
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="japanese-card">
                    <div class="japanese-card-body">
                        <h3 class="mb-4">Welcome, {{ Auth::user()->name }}!</h3>
                        
                        <p>This is your personal dashboard where you can manage your account and view your activity.</p>
                        
                        <div class="mt-5">
                            <h4 class="mb-3">Account Information</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Name:</span>
                                    <span>{{ Auth::user()->name }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Email:</span>
                                    <span>{{ Auth::user()->email }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Joined:</span>
                                    <span>{{ Auth::user()->created_at->format('F d, Y') }}</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="mt-5">
                            <h4 class="mb-3">Actions</h4>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="#" class="japanese-btn">Edit Profile</a>
                                <a href="#" class="japanese-btn">Change Password</a>
                                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="japanese-btn">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="japanese-divider"></div>

<div class="japanese-section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Recent Activity</h2>
            <p class="section-subtitle">最近のアクティビティ</p>
        </div>
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="japanese-card">
                    <div class="japanese-card-body">
                        <div class="alert alert-info">
                            No recent activity to display.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-main>