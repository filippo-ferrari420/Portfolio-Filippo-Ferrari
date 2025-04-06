<nav class="navbar navbar-expand-lg navbar-light japanese-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <h1 class="japanese-logo mb-0">コードの旅</h1>
            <span class="logo-subtitle">Code Journey</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn-link nav-link">Logout</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>