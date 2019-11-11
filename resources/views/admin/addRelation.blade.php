<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Make Notifications| So-Coaching</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 8433466260</a>
                <a href="#"><span>Email:</span> admissions@socoaching.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="../img/core-img/logo.png" alt=""></a>

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
@guest
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/contact">Contact</a></li>
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
                                <div class="userthumb">
                                    <img src="../img/core-img/guest.png" alt="">
                                </div>
                            </div>
                            
@elseif(auth()->user()->userType==0)
<div class="classynav">
                        
                            <ul>
                                <li><a href="/MemberLogin">Home</a></li>
                                <li><a href="/register">Register User</a></li>
                                <li><a href="/contact">Create Relationships</a></li>
                                
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
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin -Notifications</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="/login">My Notifications</a>
                                            <a class="dropdown-item" href="/notifications/create">Create Notifications</a>
                                        </div>
                                    </div>
                                </div>

    
@endguest


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
    @guest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Access  Denied</div>

                <div class="card-body">
                    It looks like you are not logged in to our website. <br>
                    This feature can only be accessed by the admin and teachers.
                    <br> <a href="/login">Click here to login</a>
                    <br>OR<br>
                    <a href="/">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>

@elseif (auth()->user()->userType==1 || auth()->user()->userType==3)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Access  Denied</div>

                <div class="card-body">
                    It looks like you are not logged in to our website as admin or teacher<br>
                    This feature can only be accessed by the Admin or the teacher.
                    <br> <a href="/login">Click here to login</a>
                    <br>OR<br>
                    <a href="/memberLogin">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>

@else
        <center>
        <h1>Create Relationship</h1><hr>
        {!! Form::open(['action' => 'RelationshipsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group" style="width:1000px">
                {{Form::label('parent_id', 'Parent User ID:')}}
                {{Form::text('parent_id', '', ['class' => 'form-control', 'placeholder' => 'Parent User ID'])}}
            </div>
            <div class="form-group" style="width:1000px">
                {{Form::label('student_id', 'Student User ID')}}
                {{Form::text('student_id', '', [ 'class' => 'form-control', 'placeholder' => 'Student User ID'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        <center>
@endguest
    <br><br>         
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
   

     <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    </body>

</html>