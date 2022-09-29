{{-- <header>
    <div class="navbar d-expand-lg navbar-light  ">
        fixed-top
        <div class="container nav_container ">
            <span class="navbar-brand">
                <span> Job</span>
            </span>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-cont">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="navbar-cont">
                <ul class="navbar-nav ">
                    <li class="nav-item"><a href="/index" class="nav-link  ">Home</a></li>
                    <li class="nav-item"><a href="/jobs" class="nav-link">jobs</a></li>

                    <li class="nav-item"><a href="companies" class="nav-link ">Companies</a></li>
                    <li class="nav-item"><a href="services" class="nav-link">services</a></li>
                    <li class="nav-item"><a href="about" class="nav-link colored">About</a></li>
                    <li class="nav-item"><a href="contact" class="nav-link">contact</a></li>

                    <li class="nav-item"><a href="/login" class="nav-link nav_icons"><i
                                class="fas fa-sign-in-alt"></i></a></li>
                    <li class="nav-item"><a href="/signup" class="nav-link nav_icons"><i
                                class="fas fa-user-plus"></i></a></li>
                    {{-- <li class="nav-item"><a href="profile.html" class="nav-link nav_icons"><i class="fas fa-user"></i></a></li>
                                <li class="nav-item"><a href="profile.html" class="nav-link nav_icons"><i class="fas fa-user"></i></a></li> --}}

{{-- </ul>
            </div>
        </div>
    </div>
</header> --}}
<header>
    <div class="navbar navbar-expand-lg navbar-light  fixed-top ">
        <div class="container nav_container  ">
            <span class="navbar-brand">
                <span class="text-white"> Job</span>
            </span>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-cont">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="navbar-cont">
                <ul class="navbar-nav  ">
                    <li class="nav-item "><a href="/home"
                            class="nav-link {{ Route::current()->uri === 'home' ? 'colored  ' : ' ' }} ">Home</a>
                    </li>
                    <li class="nav-item"><a href="/jobs"
                            class="nav-link {{ Route::current()->uri === 'jobs' || str_contains(Route::current()->uri, 'jobDetails') ? 'colored  ' : ' ' }} ">Jobs</a>
                    </li>

                    <li class="nav-item text-white"><a href="/companies"
                            class="nav-link {{ Route::current()->uri === 'companies' ? 'colored  ' : ' ' }} ">Companies</a>
                    </li>
                    <li class="nav-item text-white"><a href="/services"
                            class="nav-link {{ Route::current()->uri === 'services' ? 'colored  ' : ' ' }}">Services</a>
                    </li>
                    <li class="nav-item text-white"><a href="/about"
                            class="nav-link {{ Route::current()->uri === 'about' ? 'colored  ' : ' ' }}">About</a></li>
                    <li class="nav-item text-white"><a href="/contact"
                            class="nav-link {{ Route::current()->uri === 'contact' ? 'colored  ' : ' ' }}">Contact</a>
                    </li>

                    {{-- <li class="nav-item text-white"><a class="nav-link change_language">Arabic</a></li> --}}
                    @guest
                        <li class="nav-item"><a href="/login" class="nav-link nav_icons"><i
                                    class="fas fa-sign-in-alt"></i></a></li>

                        <li class="nav-item"><a href="/signup" class="nav-link nav_icons"><i
                                    class="fas fa-user-plus"></i></a></li>
                    @endguest
                    @auth
                        @if (Auth::user()->hasRole('user'))
                            <li class="nav-item"><a href="/profile" class="nav-link nav_icons"><i
                                        class="fas fa-user"></i></a>
                            </li>
                        @else
                            <li class="nav-item"><a href="/list_users" class="nav-link nav_icons"><i
                                        class="fas fa-user"></i></a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
