<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/poppinsFont.css">
    <link rel="stylesheet" href="css/dancingFont.css">
    <title>FAQ</title>
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
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> -->
                          <li class="scroll-to-section"><a href="{{ route('faq') }}" class="active">FAQ</a></li>
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
                                    <li><a href="password/reset">Change Password</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
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
                            <h4>Frequently Asked Questions</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{ route('contact') }}">Book a lesson</a>
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

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="left-text-content"> -->
                        <div class="section-heading">
                            <h2>Frequently Asked Questions(FAQ)</h2>
                        </div>
                        <!-- START OF ACCORDION -->
                            <div class="accordion" id="myAccordion">
                                <button type="button" class="btn btn-primary mb-1" data-toggle="collapse" data-target="#collapsible-1" data-parent="#myAccordion">What's included in your service?</button>
                                    <div id="collapsible-1" class="collapse mb-2">
                                        <p>1-to-1 easy and comprehensive teaching.<br>
                                        Patience. Everyone is unique. Some people understand things the first time, some may take longer. Changing the style or putting the message across in a different manner 
                                        helps the client understand.<br>
                                        Being friendly and yet professional are important to make the client feel comfortable, relaxed and comfortable in what he/she is learning.<br>
                                        Extra resources outside lesson time may be provided to enable the client to learn at his/her best.</p>
                                    </div>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="collapse" data-target="#collapsible-2" data-parent="#myAccordion">what can the Tutor help me with?</button>
                                    <div id="collapsible-2" class="collapse mb-2">
                                        <p>- Speaking and listening<br>
                                           - Grammar<br>
                                           - Spelling and vocabulary<br>
                                           - Reading and writing<br><br>
                                           The above from Beginner to Intermediate level.<br>
                                        </p>
                                    </div>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="collapse" data-target="#collapsible-3" data-parent="#myAccordion">How long does a session last?</button>
                                    <div id="collapsible-3" class="collapse mb-2">
                                        <p>Generally a session can range between 1-2 hours. Number of hours is entirely up to the client. Client may have a tight deadline and may 
                                        need more hours in which Tutor can be flexible. Generally 2 hours maximum with a break of 5 minutes.</p>
                                    </div>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="collapse" data-target="#collapsible-4" data-parent="#myAccordion">How much does it cost per hour?</button>
                                    <div id="collapsible-4" class="collapse mb-2">
                                        <p>Rate is £12 per hour. In case the Tutor needs to travel to see the client, the client will pay for the transport.</p>
                                    </div>
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="collapse" data-target="#collapsible-5" data-parent="#myAccordion">How can I pay?</button>
                                    <div id="collapsible-5" class="collapse mb-2">
                                        <p>- Bank transfer(24 hours before Tuition is to take place)<br>
                                           - PayPal<br>
                                           - Cash(For face to face home tuition)<br>
                                        </p>
                                    </div>
                            </div>
                        <!-- END OF ACCORDION -->
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- ***** About Area Ends ***** -->
        
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
