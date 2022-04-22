<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/poppinsFont.css">
    <link rel="stylesheet" href="css/dancingFont.css">
    <title>Welcome to Learn English Ayrshire</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- jQuery -->
    <script src="js/jquery3.6.0.js"></script>
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
                            <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
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
                            <li class="scroll-to-section"><a href="#learnenglish">Learn English</a></li>
                            <li class="scroll-to-section"><a href="{{ route('cv') }}">CV</a></li> 
                            <li class="scroll-to-section"><a href="{{ route('blog') }}">Blog</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                          <li class="scroll-to-section"><a href="{{ route('faq') }}">FAQ</a></li>
                          <li class="scroll-to-section"><a href="{{ route('contact') }}">Contact</a></li> 
                          
                          @if(Auth::check())
                            <li class="submenu">
                                <a href="javascript:;">Welcome {{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="password/reset">Change Password</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            @else
                            <li class="submenu">
                                <a href="javascript:;">Welcome</a>
                                <ul>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="password/reset">Change Password</a></li>
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
                            <h4>Learn English</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#contact">Book a lesson</a>
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

    
   <!-- ALERT MESSAGE WAS HERE FROM CONTACT FORM -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About the Tutor</h6>
                            <h2>Welcome!</h2>
                        </div>
                        <p>If you are looking to learn English you came to the right place!</p>
                        <p>A bit about me. 
                        I'm Philip. I'm a qualified teacher currently teaching ESOL through the council. I have 12 years of experience in teaching
                        English for speakers of other languages. 
                        I have taught English in schools, community centres, online and workshops through the council.    
                        </p>
                        <!-- <div class="row">
                            <div class="col-4">
                                <img src="images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="images/about-thumb-03.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <iframe src="https://www.youtube.com/embed/kHN30PZ_K_w?rel=0" width="510" height="479" title="Tutor's introduction" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen><i class="fa fa-play"></i></iframe>
                            <!-- <iframe src="https://www.youtube.com/watch?v=kHN30PZ_K_w" frameborder="0" allowfullscreen><i class="fa fa-play"></i></iframe> -->
                            <!-- <object data="https://www.youtube.com/watch?v=kHN30PZ_K_w"><i class="fa fa-play"></i></object> -->
                            <!-- <a rel="nofollow" href="videos/videoProfile.mp4"><i class="fa fa-play"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="learnenglish">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Learn English</h6>
                        <h2>Affordable prices from an experienced, professional and friendly</h2>
                        <h4>How does it work?</h4><br>
                        <p>
                            1. Contact the Tutor to book a lesson and arrange date and time.<br><br>
                            2. Tutor assesses the client to check the level of English(Eg. Beginner, Elementary, Pre-intermediate etc...)<br><br>
                            3. Tutor allocates the right resources for the client based on his/her needs.<br><br>
                            4. On the second lesson onwards we work on what the English assessment highlighted we need to work on. For example,
                                if the client showed low literacy and reading, we would work on that. <br><br>
                            5. Continuing with the lessons we would work on literacy, reading(including phonics), writing, spelling, vocabulary(learning new words)<br><br>
                            6. Homework is provided at the end of each session that's based on what we did<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
        
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
                        <p>© Copyright santosfm.com
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery3.6.0.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/accordions.js"></script>
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
    <script>

       /* $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
*/
    </script>
  </body>
</html>