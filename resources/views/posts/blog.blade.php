<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/poppinsFont.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/dancingFont.css">
    <title>Blog</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('home') }}" class="logo">
                            <img src="images/logo.png" align="logo" id="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home')}}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('home')}}">About</a></li>
                           	
                            <li class="scroll-to-section"><a href="{{ route('home')}}">Learn English</a></li>
                            <li class="scroll-to-section"><a href="{{ route('cv') }}">CV</a></li> 
                            <li class="scroll-to-section"><a href="{{ route('blog')}}" class="active">Blog</a></li>
                            
                          <li class="scroll-to-section"><a href="{{ route('faq')}}">FAQ</a></li>
                          <li class="scroll-to-section"><a href="{{ route('contact')}}">Contact</a></li> 
                          
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

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Welcome to our Blog!</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{ route('contact')}}">Book a lesson</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="images/slider1Img(2).png" alt="Learn English">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="images/slider2Img.png" alt="Learning English Grammar">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="images/slider3Img.png" alt="Learn English online">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <br>
    @if (session()->has('success'))
        <div class="ml-4">   
            <h4 class="text-success ml-40"> {{ session()->get('success') }} </h4>
        </div>
    @endif

    <br>
    @if (session()->has('status'))
        <div class="ml-4">   
            <h4 class="text-danger ml-40"> {{ session()->get('status') }} </h4>
        </div>
    @endif

    <br><br>
    <div class="container">
    
        <div class="py-15 text-center border-b border-gray-200">
            <h2>Blog Post</h2>
            <br><br>
        </div>
        <br>

        <div class="py-15 text-center border-b border-gray-200">
            <h4>Can you learn English well from using just a computer compared to being taught by an English teacher?</h4>
            <br>
            <p>Let me know by posting a comment below.</p>
        </div>
        <br>
    <!-- IF USER IS LOGGED IN DISPLAY CREATE POST BUTTON OTHERWISE DISPLAY links to register -->
    @if (Auth::check()) 
        <div class="ml-40"> 
                <a href="posts/create" class="blogButton">
                    Create Post
                </a>
            </div>
        @else
        <h5>Please <a href="{{ route('register')}}">register</a> or <a href="{{ route('login')}}">login</a> to add your blog entry.</h5>
    @endif

    <br>

@foreach ($posts as $post)

<div class="container mt-4">
  <div class="row">
    <div class="col-sm-6">

    @if($post->image_path ==null) 
        <img src="{{ asset('images/computerLearning.png') }}" width="303" height="189" alt="Your uploaded image">
    @else
        <img src="{{ asset('images/' . $post->image_path) }}" width="303" height="189" alt="Your uploaded image">
    @endif
    
   
       <br>
    </div>
    <br>
    <div class="col-sm-6">
        <h2> {{ $post->title }} </h2><br>
        <h6> {{ $post->body }} </h6> <br>
        By <span class="font-weight-bold font-italic">{{ $post->user->name }}</span>, created on 
            <span class="font-italic">{{ date('jS M Y', strtotime($post->created_at)) }} </span><br>
             Updated on <span class="font-italic">{{ date('jS M Y', strtotime($post->updated_at)) }} </span>
        <br>
        <!-- IF USER LOGGED IN DISPLAY EDIT AND DELETE LINKS     -->
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right text-right ml-4"><a href="posts/{{$post->id}}/edit">Edit</a></span>
                        <span class="float-right text-right">
                            <form action="posts/{{$post->id}}" method="POST">
                                @csrf
                                @method('delete')

                                <input type="image" class="mr-20" src="{{ asset('images/deleteLink.png')}}" type="submit">
                            </form>
                    </span>
            @endif
        </div>
  </div>
</div>
@endforeach

<br>
<!-- DISPLAY PAGINATION -->
{{ $posts->links() }}

</div>  <!-- END CONTAINER -->

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
    <script src="js/popper.js"></script>
    <script src="js/jquery3.6.0.js"></script> <!-- jQuery -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <!-- <script src="js/accordions.js"></script> -->
    <script src="js/datepicker.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script> 
    <script src="js/slick.js"></script> 
    <script src="js/lightbox.js"></script> 
    <script src="js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="js/custom.js"></script>
    
  </body>
</html>