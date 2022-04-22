<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="CSSStylesForCV/poppinsFont.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="CSSStylesForCV/dancingFont.css">
    <link href="CSSStylesForCV/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSSStylesForCV/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSSStylesForCV/aos.css">
    <link rel="stylesheet" type="text/css" href="CSSStylesForCV/main.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>CV/Resume</title>
    </head>
    <body>
    
    <!-- ***** Preloader Start *****
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
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
                            <li class="scroll-to-section"><a href="{{ route('cv') }}" class="active">CV</a></li> 
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
                            <h4>CV/Resume</h4>
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

	<!-- END OF TOP MENU -->
  <div class="page-content mt-4">
      <div class="container">
		<div class="cover shadow-lg bg-white">
		  <div class="cover-bg p-3 p-lg-4 text-white">
			<div class="row">
			  <div class="col-lg-4 col-md-5">
				<div class="avatar hover-effect bg-white shadow-sm p-1"><img src="images/FilipeSantos.png" width="200" height="184"/></div>
			  </div>
			  <div class="col-lg-8 col-md-7 text-center text-md-start">
				<h3 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">Filipe Santos</h3>
				<p data-aos="fade-left" data-aos-delay="100">Computing and English/ESOL Teacher</p>
				<div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a class="btn btn-success shadow-sm mt-1" href="{{ route('contact') }}" target="_blank" rel="noopener">Hire Me</a> </div>
			  </div>
			</div>
		  </div>
		  
		  <div class="about-section pt-4 px-3 px-lg-4 mt-1">
			<div class="row">
			  <div class="col-md-6">
				<h2 class="h3 mb-3">About the Tutor</h2>
				I'm passionate about teaching and working with learners and seeing them progress, going from 
        		beginner to Intermediate in less than 2 years. It gives great job satisfaction of working with
        		learners from all around the world.<br>
        		On my spare time when I'm not creating resources for the learners I enjoy creating websites.
			  </div>
			  <div class="col-md-5 offset-md-1">
				<div class="row mt-2">
				   <div class="col-sm-4">
					<div class="pb-1">Email</div>
				  </div>
				  <div class="col-sm-8">
					<div class="pb-1 text-secondary">santosfm22@hotmail.com</div>
				  </div>
				  <div class="col-sm-4">
					<div class="pb-1">Phone</div>
				  </div>
				  <div class="col-sm-8">
					<div class="pb-1 text-secondary">+4407727668332</div>
				  </div>
				  <div class="col-sm-4">
					<div class="pb-1">Location</div>
				  </div>
				  <div class="col-sm-8">
					<div class="pb-1 text-secondary">Scotland, UK</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
  
		  <hr class="d-print-none"/>
		  <div class="skills-section px-3 px-lg-4">
			<h2 class="h3 mb-3">Key Skills</h2>
			<div class="row">
			  <div class="col-md-6">
				<div class="mb-2"><span>Logical approach to work</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" id="barWidth90" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div> 
				  </div>
				</div>
				<div class="mb-2"><span>Problem Solving</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" id="barWidth85" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				</div>
				<div class="mb-2"><span>Explain things clearly</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" id="barWidth75" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>    
				  </div>
				</div>
				   <div class="mb-2"><span>Grammar</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" id="barWidth85" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>       
				  </div>
				</div>
			  </div>
			  <div class="col-md-6">
				<div class="mb-2"><span>Attention to detail</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" id="barWidth80" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>    
				  </div>
				</div>
				<div class="mb-2"><span>Communication Skills</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" id="barWidth75" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>  
				  </div>
				</div>
				<div class="mb-2"><span>Creativity</span>
				  <div class="progress my-1">
					<div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" id="barWidth75" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>  
				</div>
				</div>
					  
			</div> <!-- END ROW -->
		</div> <!-- end skills section -->
		  <!-- </div> -->
		  
		  <h2 class="h3 mb-3 mt-4">Other Skills</h2>
			<div class="row">
			  <div class="col-md-6">
				<div class="mb-2"><span>Languages: Portuguese fluent.</span></div>
				<div class="mb-2"><span>UK driving license</span> <img src="images/drivingLicense.png" width="100px" height="50px"></div>
				<!-- <div class="mb-2"><span>Attention to detail <span class="checkedStars">&#9733; &#9733; &#9733; &#9733;</span> <span class="uncheckedStars">&#9734;</span></span></span></div>
				<div class="mb-2"><span>Communication Skills <span class="checkedStars">&#9733; &#9733; &#9733; &#9733; </span><span class="uncheckedStars"> &#9734;</span></span></div>
				<div class="mb-2"><span>Creativity <span class="checkedStars">&#9733; &#9733; &#9733;</span> <span class="uncheckedStars">&#9734; &#9734;</span></span></div> -->
			  </div>
			  <div class="col-md-6">
				<div class="mb-2"><span>Numeracy Skills <span class="checkedStars">&#9733; &#9733; </span> <span class="uncheckedStars">&#9734; &#9734; &#9734;</span></span></div>
        		<div class="mb-2"><span>Listening Skills<span class="checkedStars">&#9733; &#9733; &#9733; &#9733; </span><span class="uncheckedStars">&#9734;</span></div>
				<!--<div class="mb-2"><span>Problem Solving <span class="checkedStars">&#9733; &#9733; &#9733; &#9733; </span><span class="uncheckedStars">&#9734;</span></span></div>
				<div class="mb-2"><span>Explain technical matters clearly <span class="checkedStars">&#9733; &#9733; &#9733;</span> <span class="uncheckedStars">&#9734; &#9734;</span></span></div> -->
			  </div>
			</div>
		  </div>
  
		  <hr class="d-print-none"/>
		    <div class="work-experience-section px-3 px-lg-4">
			    <h2 class="h3 mb-4">Work Experience</h2>
			    <div class="timeline">
			      <div class="timeline-card timeline-card-primary card shadow-sm">
				      <div class="card-body">
				        <div class="h5 mb-1">ESOL Tutor<span class="text-muted h6"> at North Ayrshire</span></div>
				          <div class="text-muted text-small mb-2">Present</div>
				            <div>Teaching English as a second language to Syrian, Afghan and Ukrainian refugees. Delivering online and face-to-face classes. Customize lessons at different levels covering grammar, speaking and listening, phonics, spelling, reading and comprehension and writing. Also assessing learners’ levels.</div>
				      </div> <!--card body-->
			      </div> <!-- end timeline-->
			  
            <div class="timeline-card timeline-card-primary card shadow-sm">
				<div class="card-body">
				    <div class="h5 mb-1">ESOL Tutor with Argyll & Bute Council</div>
				        <div class="text-muted text-small mb-2">4 years</div>
                		  Teaching English as a second language to Syrian refugees. Delivering online and face-to-face customized lessons at 
						  different levels covering grammar, speaking and listening, phonics, spelling, reading and comprehension and writing.
						  Also assessing learners’ levels.
				</div>
			</div>

			<div class="timeline-card timeline-card-primary card shadow-sm">
				<div class="card-body">
				    <div class="h5 mb-1">EAL Teacher with Bushey Academy, Hertfordshire.</div>
				        <div class="text-muted text-small mb-2">4 years</div>
						Delivering English as an Additional language(EAL) classes to small groups of secondary schools students. 
						Worked also with students with special needs(autism). Assessing learners to determine what level they are at 
						and preparing classes differentiating the material for each individual learner. The main idea is to help 
						these learners move into the classroom without the teacher assistant's help.
				</div>
			</div>

			<div class="timeline-card timeline-card-primary card shadow-sm">
				<div class="card-body">
				    <div class="h5 mb-1">Teaching Assistant with Queens Park Community School, London.</div>
				        <div class="text-muted text-small mb-2">3 years</div>
						Helping students across the curriculum subjects in the classroom and on a 1-2-1 basis. 
						Also supported students whose English was not their first language (EAL) and carried out general administrative 
						duties where necessary in compliance with the EAL teacher and also the SENCO.
				</div>
			</div>

			<div class="timeline-card timeline-card-primary card shadow-sm">
				<div class="card-body">
				    <div class="h5 mb-1">Private home Tutor, London.</div>
				        <div class="text-muted text-small mb-2">3 years</div>
						Teaching Computing and ESOL on a 1-2-1 basis working through various agencies.
				</div>
			</div>
			      <!-- </div>
		  </div> -->
  
		  <hr class="d-print-none"/>
		  <div class="page-break"></div>
		  <div class="education-section px-3 px-lg-4 pb-4">
			<h2 class="h3 mb-4">Education</h2>
			<div class="timeline">
			  <div class="timeline-card timeline-card-success card shadow-sm">
				<div class="card-body">
				  <div class="h5 mb-1">Microsoft Technology Associate <span class="text-muted h6">Microsoft</span></div>
				  <div class="text-muted text-small mb-2">2021</div>
				  <div>HTML and CSS.</div>
				</div>
			  </div>

			  <div class="timeline-card timeline-card-success card shadow-sm">
				<div class="card-body">
				  <div class="h5 mb-1">Teaching English as a Foreign Language(TEFL) qualification</div>
				  <div class="text-muted text-small mb-2">April 2014</div>
				</div>
			  </div>

			  <div class="timeline-card timeline-card-success card shadow-sm">
				<div class="card-body">
				  <div class="h5 mb-1">Undergraduate Diploma in Teaching in the Lifelong Learning Sector (DTLLS)
				  <span class="text-muted h6">Canterbury Christ Church University</span></div>
				  <div class="text-muted text-small mb-2">June 2009</div>
				  <div>Qualified to teach learners over 16 years of age. For example, sixth formers and Colleges.</div>
				</div>
			  </div>

			  <div class="timeline-card timeline-card-success card shadow-sm">
			  	<div class="card-body">
				  <div class="h5 mb-1">BSc(Hons) Computing and Information Technologies <span class="text-muted h6">Derby University</span></div>
				  	<div class="text-muted text-small mb-2">2019</div>
				  <div>Studied practical modules including; Cyber security, database design and implementation, Web development, impact of computing technologies on society and a research project.
			   	</div>
				</div>
			  </div>
			  	  

			  <h2 class="h3 mb-3 mt-4">Hobbies and Interests</h2>
			  <div class="row">
				<div class="col-md-6">
				  <div class="mb-2">Movies&nbsp;&nbsp;
					<svg xmlns="images/film.svg" width="70px" height="70px" fill="currentColor" class="bi bi-film" viewBox="0 0 30 30">   <!---->
					<path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
					</svg><br>
					<div class="mb-2">Travel&nbsp;&nbsp;
					  <img src="images/travel.png" width="70px" height="70px">
					</div><br>
					<div class="mb-2">Family&nbsp;&nbsp;
					  <img src="images/family.png" width="70px" height="70px">
					</div>
				  </div>
				</div>

				<div class="col-md-6">
				  <div class="mb-2">Cycling&nbsp;&nbsp;
					<svg xmlns="images/bicycle.svg" width="70px" height="70px" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 20 20">   <!---->
					  <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
					</svg>
					</div>
					<div class="mb-2">Studying the Bible
					<svg xmlns="images/book.svg" width="70px" height="70px" fill="currentColor" class="bi bi-book" viewBox="0 0 20 20">
					  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
					</svg>
					</div>
					<div class="mb-2" width="50px" height="50px">Comedies
					  <img src="images/comedies.png">
					</div>
				</div>
			  </div>
			  
			</div>
		  </div> <!--END OF EDUCATION SECTION -->

    <!-- ***** Footer Start ***** -->
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Learn English Ayrshire
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/jquery3.6.0.js"></script> <!-- jQuery -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- CV FILES -->
    <script src="scriptsForCV/bootstrap.bundle.min.js"></script>
    <script src="scriptsForCV/aos.js"></script>
    <script src="scriptsForCV/main.js"></script>

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