<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/poppinsFont.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/dancingFont.css">
    <title>Reset your password</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <!-- <link rel="stylesheet" href="css/owl-carousel.css"> -->
    <link rel="stylesheet" href="../css/lightbox.css">
    <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
    
    <!-- ***** Preloader Start ***** 
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  -->
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('home') }}" class="logo">
                            <img src="../images/logo.png" align="logo" id="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home') }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('home') }}">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{ route('home') }}">Learn English</a></li>
                            <li class="scroll-to-section"><a href="{{ route('cv') }}">CV</a></li> 
                            <li class="scroll-to-section"><a href="{{ route('blog') }}">Blog</a></li>
                           
                          <li class="scroll-to-section"><a href="{{ route('faq') }}">FAQ</a></li>
                          <li class="scroll-to-section"><a href="{{ route('contact') }}">Contact</a></li> 
                          @if(Auth::check())
                            <li class="submenu">
                                <a href="javascript:;">Welcome {{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="../password/reset">Change Password</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </li>
                            @else
                            <li class="submenu">
                                <a href="javascript:;">Welcome</a>
                                <ul>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="../password/reset">Change Password</a></li>
                                </ul>
                            </li>
                            @endif
                            </li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Footer Start ***** -->
<footer>
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div> -->
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>?? Copyright santosfm.com
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap -->
    <script src="../js/popper.js"></script>
    <script src="../js/jquery3.6.0.js"></script> <!-- jQuery -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <!-- <script src="js/owl-carousel.js"></script> -->
    <!-- <script src="js/accordions.js"></script> -->
    <!-- <script src="js/datepicker.js"></script> -->
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imgfix.min.js"></script> 
    <script src="../js/slick.js"></script> 
    <script src="../js/lightbox.js"></script> 
    <script src="../js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="../js/custom.js"></script>
  </body>
</html>
