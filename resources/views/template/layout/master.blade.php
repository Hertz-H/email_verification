<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrapFile.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- 
    <link rel="stylesheet" href="../assets/css/header_footer.css">
   <link rel="stylesheet" href="../assets/css/about.css"> --}}
    <link rel="stylesheet" href="../assets/css/header_footer.css">

    @yield('css')

</head>

<body>
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
                                class="nav-link {{ Route::current()->uri === 'about' ? 'colored  ' : ' ' }}">About</a>
                        </li>
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
    @yield('content')
    <footer>
        <div class="container">
            <div class="footer_container">
                <div class="copyright">
                    &copy; 2022 All rights are resvered
                </div>
                <div class="social_links">
                    <a><i class="fab fa-facebook "></i></a>
                    <a><i class="fab fa-youtube "></i></a>
                    <a><i class="fab fa-twitter "></i></a>
                    <a><i class="fab fa-linkedin-in "></i></a>
                    <a><i class="fab fa-instagram "></i></a>
                </div>
            </div>

        </div>
    </footer>
    @yield('javaScript')
    <script src="../assets/js/bootstap_js_file.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
