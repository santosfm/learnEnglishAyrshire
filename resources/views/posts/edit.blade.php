<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/poppinsFont.css') }}">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/dancingFont.css') }}">
    <title>Edit Blog Entry</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
                            <img src="{{ asset('images/logo.png') }}" align="logo" id="logo">
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
                                    <li><a href="password/reset">Change Password</a></li>
                                    <li><a href="{{ route('logout')}}">Logout</a></li>
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
                <div class="card-header">{{ __('Edit Post') }}</div>

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
                    
                    <form action="/posts/{{$post->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Post title</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}">
                        </div>

                        <div class="form-group">
                            <label for="">Post body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Upload Image</label>
                                <input type="file" name="image" class="form-control-file hidden">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="">Updated at</label>
                            <input type="date" name="updated_at" class="form-control" value="{{ date('Y-m-d', strtotime($post->updated_at)) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Update Post</button>
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
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/jquery3.6.0.js') }}"></script> <!-- jQuery -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <!-- <script src="js/accordions.js"></script> -->
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('/js/slick.js') }}"></script> 
    <script src="{{ asset('/js/lightbox.js') }}"></script> 
    <script src="{{ asset('/js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>
    
</body>
</html>
