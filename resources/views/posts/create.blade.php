<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../css/poppinsFont.css">
    <link rel="stylesheet" href="../css/dancingFont.css">
    <title>Blog</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/owl-carousel.css">
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
                        <a href="{{ route('home')}}" class="logo">
                            <img src="../images/logo.png" align="logo" id="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home') }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('home') }}">About</a></li>
                           	
                            <li class="scroll-to-section"><a href="{{ route('home') }}">Learn English</a></li>
                            <li class="scroll-to-section"><a href="{{ route('cv') }}">CV</a></li> 
                            <li class="scroll-to-section"><a href="{{ route('blog') }}" class="active">Blog</a></li>
                            
                          <li class="scroll-to-section"><a href="{{ route('faq') }}">FAQ</a></li>
                          <li class="scroll-to-section"><a href="{{ route('contact') }}">Contact</a></li> 
                          
                          @if(Auth::check())
                            <li class="submenu">
                                <a href="javascript:;">Welcome {{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="../password/reset">Change Password</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            @else
                            <li class="submenu">
                                <a href="javascript:;">Welcome</a>
                                <ul>
                                    <li><a href="password/reset">Change Password</a></li>
                                    <li><a href="{{ route('register')}}">Register</a></li>
                                    <li><a href="{{ route('login')}}">Login</a></li>
                                </ul>
                            </li>
                            @endif

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
                <div class="card-header">{{ __('Create Post') }}</div>

                <!-- IF THERE ARE ANY ERROR MESSAGES DISPLAY IT -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/post" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Post title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Post body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Upload Image</label> (Optional. Maximum 2MB)
                                <input type="file" name="image" class="hidden">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Post</button>
                        <button type="reset" class="btn btn-warning mt-3">Clear</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<br>

 <!-- ***** Footer Start ***** -->
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright santosfm.com
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
    <!-- <script src="../js/owl-carousel.js"></script> -->
    <!-- <script src="js/accordions.js"></script> -->
    <script src="../js/datepicker.js"></script>
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