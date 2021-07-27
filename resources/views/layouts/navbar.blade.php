<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3">
    <div class="container">
        <a class="navbar-brand" href="#">SuperBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active me-3" aria-current="page" href="#">Home</a>
                <a class="nav-link me-3" href="#">Features</a>
                <a class="nav-link me-5" href="#">Pricing</a>


                @guest

                @if (Route::has('login'))
                {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                <a href="{{ route('login') }}" class="btn btn-primary col-2">Login</a>
                @endif

                @if (Route::has('register'))
                {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                <a class="nav-link ms-3 text-primary" href="{{ route('register') }}">Register</a>
                @endif
                @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="photo/{{ Auth::user()->photo }}" width="30" height="30" class="rounded-circle me-2"
                            alt="">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="" class="dropdown-item">Create Story</a>
                        <a href="" class="dropdown-item">Settings</a>
                        <div class="container">
                            <hr>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

            </div>
        </div>
    </div>
</nav>