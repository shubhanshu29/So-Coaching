<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Chats</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
@if(auth()->user()->userType==3)
<hr>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/MemberLogin">Home</a></li>
                                <li><a href="/attendance/{{auth()->user()->id}}/view">View Attendance</a></li>
                                <li><a href="/marks/{{auth()->user()->id}}/view">View Marks</a></li>
                                <li><a href="/studymaterial">Study Material</a></li>
                                <li><a href="/chats">Your Messages</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parent-Notifications</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="/notifications">View Notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="<?= asset('../img/core-img/guest.png') ?>">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <hr>

@elseif(auth()->user()->userType==2)
<hr>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/MemberLogin">Home</a></li>
                                <li><a href="/attendance">Upload Attendance</a></li>
                                <li><a href="/marks">Upload Marks</a></li>
                                <li><a href="/studymaterial/upload">Study Material</a></li>
                                <li><a href="/chats">Chat with parents</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Teacher-Notifications</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="/notifications">View Notifications</a>
                                            <a class="dropdown-item" href="/notifications/create">Create Notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="<?= asset('img/core-img/guest.png') ?>">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <hr>

@endif
    @extends('layouts.app')

    @section('content')
        <center><h1>Chats</h1></center>
        @if(count($users) >= 1)
            @foreach($users as $user)
                <section class="contact-area">
                    <div class="container">
                        <div class="col-12 col-lg-6">
                            <div class="contact--info mt-50 mb-100">
                                <h4>{{$user->name}}</h4>
                                <a href="/chats/view/{{$user->id}}" class="btn btn-default">View Chat</a>
                            </div>
                        </div>
                    </div>
                </section>        
            @endforeach
        @else
            <center>
                <p>No new Chats for you!!</p>
            </center>    
        @endif 
        <br><br><hr>
        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 999999999</a>
                <a href="#"><span>Email:</span> admission@socoaching.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
@endsection
