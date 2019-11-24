<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Study Material: So-Coaching</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
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
                  @if(auth()->user()->userType==1)
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/MemberLogin">Home</a></li>
                                <li><a href="/attendance/{{auth()->user()->id}}/view">View Attendance</a></li>
                                <li><a href="/marks/{{auth()->user()->id}}/view">View Marks</a></li>
                                <li><a href="/studymaterial">Study Material</a></li>
                                <li><a href="/scholarships/create">Apply for scholarship</a></li>
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
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="/notifications">View Notifications</a>
                                        </div>
                                    </div>
                                </div>
                   
                @elseif(auth()->user()->userType==2)
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

                @elseif(auth()->user()->userType==3)
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
                    @endif
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

    @extends('layouts.app')

    @section('content')
        <center><h1>Study Material: So-Coaching</h1><br><br>
        @if(count($materials) >= 1)
            @foreach($materials as $material)
                <section class="contact-area">
                    <div class="container">
                        <div class="col-12 col-lg-6">
                            <div class="contact--info mt-50 mb-100">
                                <h4>Uploaded By:  {{$material->name}} </h4>
                                <br><h4> Target Audience: {{$material->target}}</h4>
                                <p>
                                    <strong>Title:   </strong>{{$material->title}}<br>
                                    <strong>URL:   </strong><a href="{{$material->url}}">{{$material->url}}</a>}<br>
                                    <strong>Full File:   </strong><a href="\storage\SM\{{$material->attachment}}">{{$material->attachment}}</a><br>
                                    <small>Uploaded On:   {{$material->created_at}}</small><br>
                                    <small>Last Modified At:   {{$material->updated_at}}</small><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>        
            @endforeach
        @else
                <p>No Study Material for you!! Ask your teacher to update new one</p>
              
        @endif
        </center>   
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
                <a href="#"><span>Phone:</span> +91 8433466260</a>
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
