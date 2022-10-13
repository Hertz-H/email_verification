<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- https://fontawesome.com/v5/icons/plus?s=regular&f=classic --}}

</head>

<body>

    <div class="dashboard_cont">
        <div class="container ">
            <!-- <div class="header_line"> -->
            <header class="">




                <div class="navbar navbar-dark  ">
                    <div class="container nav_container ">
                        <span class="navbar-brand">
                            <div class="user_img m-auto ">
                                <img class=""src="/images/user.png" alt="">
                            </div>
                        </span>

                        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-cont">
                            <i class="fas fa-bars">
                            </i>
                        </button>

                        <div class="navbar-collapse collapse " id="navbar-cont">
                            <ul class="navbar-nav ">
                                <li class="nav-item"><a href="" class="nav-link active colored"> <i
                                            class="fas fa-user"></i><span> Personal Info</span> </a></li>
                                <li class="nav-item"><a href="" class="nav-link "> <i
                                            class="fas fa-user"></i><span> Experince</span> </a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i
                                            class="fas fa-user"></i><span> Education</span></a></li>
                                <li class="nav-item"><a href="" class="nav-link"> <i
                                            class="fas fa-user"></i><span> Courses</span> </a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i
                                            class="fas fa-user"></i><span> skills</span> </a></li>
                                <li class="nav-item"><a href="" class="nav-link nav_icons"><i
                                            class="fas fa-user"></i><span> log out</span> </a></li>

                            </ul>
                        </div>
                    </div>
                    {{-- <div class="div">
                        <a href="/home"><i class="fas fa-home-lg-alt"></i> </a>
                        <a href="change-password"><i class="fas fa-retweet"></i> </a>
                    </div> --}}

                </div>

            </header>

            <!-- </div> -->
            <div class="dashboard d-flex  " style="gap:70px">
                <div class="sidebar ">

                    {{-- <div class="user_sec text-center ">
                        <div class="user_img m-auto ">
                            <img class=""src="/images/user.png" alt="">
                        </div>
                        {{-- <h5>{{ $data['name'] }} <i class="fas fa-user-edit per_edit"></i></h5> --}}

                    {{-- </div>  --}}
                    <a href="/home">
                        <div class="side_item ">
                            <i class="fas fa-home-lg-alt"></i><span>Home</span>
                        </div>
                    </a>
                    <a href="/dashboard">
                        <div class="side_item {{ Route::current()->uri === 'dashboard' ? 'sel_side' : ' ' }}">
                            <i class="fad fa-chart-line"></i><span>Dashboard</span>
                        </div>
                    </a>

                    <a href="/list_users">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_users' || Route::current()->uri == 'add_user' || str_contains(Route::current()->uri, 'update_user') ? 'sel_side' : ' ' }}">
                            <i class="fas fa-users"></i><span>Users</span>
                        </div>
                    </a>
                    <a href="/list_locations">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_locations' || Route::current()->uri == 'add_location' || str_contains(Route::current()->uri, 'update_location') ? 'sel_side' : ' ' }}">
                            <i class="fas fa-map-marker-alt"></i><span>Locations</span>
                        </div>
                    </a>
                    <a href="/list_companies">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_companies' || Route::current()->uri == 'add_company' || str_contains(Route::current()->uri, 'update_company') ? 'sel_side' : ' ' }}">
                            <i class="fas fa-building"></i><span>Companies</span>
                        </div>
                    </a>



                    <a href="/list_categories">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_categories' || Route::current()->uri == 'add_category' || str_contains(Route::current()->uri, 'update_category') ? 'sel_side' : ' ' }}">
                            <i class="fas fa-layer-group"></i><span>Categories</span>
                        </div>
                    </a>
                    <a href="/list_jobs">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_jobs' || Route::current()->uri == 'add_job' || str_contains(Route::current()->uri, 'update_job') ? 'sel_side' : ' ' }}">
                            <i class="fas fa-briefcase"></i><span>Jobs</span>
                        </div>
                    </a>
                    <a href="/list_ads">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_ads' || Route::current()->uri == 'add_ad' || str_contains(Route::current()->uri, 'update_ad') ? 'sel_side' : ' ' }}">
                            <i class="fas fa-ad"></i><span> Adds</span>
                        </div>
                    </a>
                    <a href="/list_services">
                        <div
                            class="side_item {{ Route::current()->uri === 'list_services' || Route::current()->uri == 'add_service' || str_contains(Route::current()->uri, 'update_service') ? 'sel_side' : ' ' }}">
                            <i class="fab fa-servicestack"></i> <span>Services</span>
                        </div>
                    </a>

                    {{-- <a href="/contact">
            <div class="side_item">
                <i class="fas fa-user"></i><span  > Contact</span> 
            </div>
            </a>
            <a href="/">
              <div class="side_item">
                  <i class="fas fa-user"></i><span  > Portfilio</span> 
              </div>
              </a> --}}
                    <div class="side_item">
                        <a href="change-password"><i class="fas fa-retweet"></i><span>change password</span> </a>
                    </div>
                    <div class="side_item">
                        <a href="/logout"><i class="fas fa-sign-out-alt"></i><span> log out</span> </a>
                    </div>

                </div>
                @yield('content')

</html>
