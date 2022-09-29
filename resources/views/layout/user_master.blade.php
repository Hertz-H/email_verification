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
    @yield('css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


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
                                @if (isset($data['image']))
                                    <img class=""src="/images/{{ $data['image'] }} " alt="">
                                @else
                                    <img class=""src="/images/{{ session('image') }} " alt="">
                                @endif
                            </div>
                        </span>
                        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-cont">
                            <i class="fas fa-bars">
                            </i>
                        </button>
                        <div class="navbar-collapse collapse " id="navbar-cont">
                            <ul class="navbar-nav ">
                                <li class="nav-item"><a href="/profile" class="nav-link active colored"> <i
                                            class="fas fa-user"></i><span> Personal Info</span> </a></li>
                                <li class="nav-item"><a href="/list_experiences" class="nav-link "> <i
                                            class="fas fa-user"></i><span> Experince</span> </a></li>
                                <li class="nav-item"><a href="/list_education" class="nav-link"><i
                                            class="fas fa-user"></i><span> Education</span></a></li>
                                <li class="nav-item"><a href="/list_contacts" class="nav-link"> <i
                                            class="fas fa-user"></i><span> Contacts</span> </a></li>
                                <li class="nav-item"><a href="/list_skills" class="nav-link"><i
                                            class="fas fa-user"></i><span> skills</span> </a></li>
                                <li class="nav-item"><a href="/change-password" class="nav-link"><i
                                            class="fas fa-user"></i><span> change
                                            password</span> </a></li>
                                <li class="nav-item"><a href="/logout" class="nav-link nav_icons"><i
                                            class="fas fa-user"></i><span> log out</span> </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <!-- </div> -->
            <div class="dashboard d-flex  " style="gap:70px">
                <div class="sidebar ">

                    <div class="user_sec text-center ">
                        <div class="user_img m-auto ">
                            @if (isset($data['image']))
                                <img class=""src="/images/{{ $data['image'] }} " alt="">
                            @else
                                <img class=""src="/images/{{ session('image') }} " alt="">
                            @endif




                        </div>
                        <h5>
                            @if (isset($data['name']))
                                <img class=""src="/images/{{ $data['name'] }}" alt="">
                            @else
                                <img class=""src="/images/{{ session('name') }} " alt="">
                            @endif {{ $data['name'] }} <a href="/update_profile"><i
                                    class="fas fa-user-edit per_edit"></i></a>
                        </h5>

                    </div>

                    <div class="side_item ">
                        <a href="/profile"> <i class="fas fa-user"></i><span>Personal Info</span> </a>
                    </div>


                    <div class="side_item  sel_side">
                        <a href="/list_experiences"> <i class="fas fa-user"></i><span>Experience</span> </a>
                    </div>


                    <div class="side_item">
                        <a href="/list_education"> <i class="fas fa-user"></i><span> Education</span> </a>
                    </div>


                    <div class="side_item ">
                        <a href="/list_skills"> <i class="fas fa-user"></i><span>skills</span></a>
                    </div>


                    <div class="side_item ">
                        <a href="/list_contacts"><i class="fas fa-user"></i><span>contact</span>
                        </a>
                    </div>

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
                        <a href="/change-password"><i class="fas fa-user"></i><span>change password</span> </a>
                    </div>
                    <div class="side_item">
                        <a href="/logout"><i class="fas fa-user"></i><span> log out</span> </a>
                    </div>

                </div>
                @yield('content')
                {{-- <script src='{{ asset('activeNav.js') }}'></script> --}}


</html>
