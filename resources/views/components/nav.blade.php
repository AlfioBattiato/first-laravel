<nav class="navbar navbar-expand-lg  bg-red">
    <div class="container  text-white">
        <a class="navbar-brand  text-white" href="/">MyBOOKS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="/create">Inserisci libro</a>
                </li>
                @auth
                    <!-- se l utente è loggato -->
                    <li class="nav-item">
                        <a href="{{ url('dashboard') }}" class="nav-link text-white">
                            Dashbord
                        </a>
                    </li>
                @endauth
            </ul>
            <!-- ---------- -->
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn bg-red border text-white  " type="submit">Search</button>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0 ">
                @auth
                    {{-- se utente loggato --}}
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- altrimenti, se l'utente non è loggato --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            Log in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>