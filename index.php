<?php include 'database.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Rukasar Ali</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!--flat icon css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.html">Rukasar Ali</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class="smooth-menu active"></li>
			                    <li class="smooth-menu"><a href="#education">education</a></li>
			                    <li class="smooth-menu"><a href="#skills">skills</a></li>
			                    <li class="smooth-menu"><a href="#experience">experience</a></li>
			                    <!-- <li class="smooth-menu"><a href="#profiles">profile</a></li> -->
			                    <li class="smooth-menu"><a href="#portfolio">portfolio</a></li>
			                    <!-- <li class="smooth-menu"><a href="#clients">clients</a></li> -->
			                    <li class="smooth-menu"><a href="#contact">contact</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->
	<div id="input">
		<?php if(isset($_GET['error'])) : ?>
		<div class="error"><?php echo $_GET['error']; ?></div>
		<?php endif; ?>
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>,</span> i am <br> Rukasar <br> Ali <span>.</span>   </h2>
							<p>web developer and ui/ux designer </p>

							<a href="#contact" download>Contact Now</a>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
		<section id="about" class="about">
			<div class="section-heading text-center">
				<h2>about me</h2>
			</div>
			<div class="container">
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<a href="..."><h3>
									I am a Professional Web developer and a Freelancer. I Create Websites According to your requirements, If I'm not freelancing at that time I am attending Webinars, Surfing developer tools, and completing my personal Web Projects.
								</h3></a>
								<p>
									<a href="...">I have a diverse set of skills, that ranges from designing, to HTML + CSS + Javascript, all the way to PHP, Social Media Management and Database Administration.</a>
									<br>
									<a href="...">Open for Lean and Agile Companies That Provide Challenging tasks and Learnig Environment</a>
								</p>
								<div class="row">
									<!-- <div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>phone</h3>
											<p>987-123-6547</p>
										</div>
									</div> -->
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>email</h3>
											<p>rukasarali03@gmail.com</p>
										</div>
									</div>
									<!-- <div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>website</h3>
											<p>www.brownsine.com</p>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
								<img src="assets/images/about/behance.jpg" alt="profile_image">
								<div class="about-list-icon">
									<ul>
										<li>
											<a href="#">
												<i  class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<!-- <a href="#">
												<i  class="fa fa-dribbble" aria-hidden="true"></i>
											</a> -->
											
										</li><!-- / li -->
										<li>
											<!-- <a href="#">
												<i  class="fa fa-twitter" aria-hidden="true"></i>
											</a> -->
											<a href="https://github.com/RukasarAli">
												<i  class="fa fa-github" aria-hidden="true"></i>
											</a>
											
										</li><!-- / li -->
										<li>
											<a href="https://www.linkedin.com/in/rukasarali">
												<i  class="fa fa-linkedin" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://www.instagram.com/rukhsaranjum_">
												<i  class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										
										
									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->
		<!--about end -->
		
		<!--education start -->
		<section id="education" class="education">
			<div class="section-heading text-center">
				<h2>education</h2>
			</div>
			<div class="container">
				<div class="education-horizontal-timeline">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-horizontal-timeline">
								<div class="experience-time">
									<h2>2018 - 2020</h2>
									<h3>master <span>of </span> computer application</h3>
								</div><!--/.experience-time-->
								<div class="timeline-horizontal-border">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<span class="single-timeline-horizontal"></span>
								</div>
								<div class="timeline">
									<div class="timeline-content">
										<h4 class="title">
											Sant Gadge Baba Amravati University
										</h4>
											<h5>Along With My Academics</h5>
										<p class="description">
											Published a Research paper In International Journal of Research <b>IJDR</b> and Followed My passion in PHP and Mysql Web Development, I Did Certification in the same discipline as well as in Java Programming from Eduonix Mumbai. Also Appeared GATE-2020.
										</p>
									</div><!--/.timeline-content-->
								</div><!--/.timeline-->
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-horizontal-timeline">
								<div class="experience-time">
									<h2>2015 - 2018</h2>
									<h3>bachelor <span>of </span> computer science</h3>
								</div><!--/.experience-time-->
								<div class="timeline-horizontal-border">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<span class="single-timeline-horizontal"></span>
								</div>
								<div class="timeline">
									<div class="timeline-content">
										<h4 class="title">
											Sant Gadge Baba Amravati University
										</h4>
										<h5>Along With My Academics</h5>
										<p class="description">
											Scored 72% in Web Designing Certification Under Medh Academy Pune, being 2nd Topper of my college, I was a Runner up in the University Level Seminar competition for Mathematics. I Appeared JEST in 2018 as Well as Participated in state level+ intercollegiate IT Events. 
										</p>
									</div><!--/.timeline-content-->
								</div><!--/.timeline-->
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-horizontal-timeline">
								<div class="experience-time">
									<h2>2013 - 2015</h2>
									<h3>Vocational Studies <span>of </span> Computer Science</h3>
								</div><!--/.experience-time-->
								<div class="timeline-horizontal-border">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<span class="single-timeline-horizontal spacial-horizontal-line
									"></span>
								</div>
								<div class="timeline">
									<div class="timeline-content">
										<h4 class="title">
											Maharastra State Board
										</h4>
										<h5>Along With My Academics</h5>
										<p class="description">
											Secured 3rd position in state level Netball competition, Winner of several Drawing and Sports competitions, Started Web Designing.
										</p>
									</div><!--/.timeline-content-->
								</div><!--/.timeline-->
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!--/.education-->
		<!--education end -->

		<!--skills start -->
		<section id="skills" class="skills">
				<div class="skill-content">
					<div class="section-heading text-center">
						<h2>skills</h2>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="single-skill-content">
									<div class="barWrapper">
										<span class="progressText">PHP</span>
										<div class="single-progress-txt">
											<div class="progress ">
												<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="">
													  
												</div>
											</div>
											<h3>90%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">MySQL</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="10" aria-valuemax="100" style="">
												    
											   </div>
											</div>
											<h3>85%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">Management</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="10" aria-valuemax="100" style="">
												   
											   </div>
											</div>
											<h3>95%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">sketch</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="">
												    
											   </div>
											</div>
											<h3>90%</h3>	
										</div>
									</div><!-- /.barWrapper -->
								</div>
							</div>
							<div class="col-md-6">
								<div class="single-skill-content">
									<div class="barWrapper">
										<span class="progressText">html 5</span>
										<div class="single-progress-txt">
											<div class="progress ">
												<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="">
													
												</div>
											</div>
											<h3>90%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">css 3</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="10" aria-valuemax="100" style="">
												    
											   </div>
											</div>
											<h3>85%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">communication</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="10" aria-valuemax="100" style="">
												   
											   </div>
											</div>
											<h3>97%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText"> creativity</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="">
												    
											   </div>
											</div>
											<h3>90%</h3>	
										</div>
									</div><!-- /.barWrapper -->
								</div>
							</div>
						</div><!-- /.row -->
					</div>	<!-- /.container -->		
				</div><!-- /.skill-content-->

		</section><!--/.skills-->
		<!--skills end -->

		<!--experience start -->
		<section id="experience" class="experience">
			<div class="section-heading text-center">
				<h2>experience</h2>
			</div>
			<div class="container">
				<div class="experience-content">
						<div class="main-timeline">
							<ul>
								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-5">
												<div class="experience-time text-right">
													<h2>Feb/2020 - Present</h2>
													<h3>Web Development <h5>Intern</h5></h3>
												</div><!--/.experience-time-->
											</div><!--/.col-->
											<div class="col-md-offset-1 col-md-5">
												<div class="timeline">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															Hexaa Infocom
														</h4>
														<h5>Nagpur, Maharashtra</h5>
														<p class="description">
															I am Currently Working on our companies Website in PHP, I have Completed two Live projects till date. Leading my Team, 
															I do Analysis on live projects as well. Certified in Digital Marketing by Google Inc.
														</p>
													</div><!--/.timeline-content-->
												</div><!--/.timeline-->
											</div><!--/.col-->
										</div>
									</div><!--/.single-timeline-box-->
								</li>

								<!-- <li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-offset-1 col-md-5 experience-time-responsive">
												<div class="experience-time">
													<h2>
														<span><i class="fa fa-circle" aria-hidden="true"></i></span>
														2016 - 2018
													</h2>
													<h3>associate design director</h3>
												</div><--/.experience-time--
											</div><--/.col--
											<div class="col-md-5">
												<div class="timeline">
													<div class="timeline-content text-right">
														<h4 class="title">
															hoplony tech limited
														</h4>
														<h5>newyork, USA</h5>
														<p class="description">
															Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident. 
														</p>
													</div><--/.timeline-content--
												</div><--/.timeline--
											</div><--/.col--
											<div class="col-md-offset-1 col-md-5 experience-time-main">
												<div class="experience-time">
													<h2>
														<span><i class="fa fa-circle" aria-hidden="true"></i></span>
														2016 - 2018
													</h2>
													<h3>associate design director</h3>
												</div><--/.experience-time--
											</div><--/.col--
										</div>
									</div><--/.single-timeline-box--
								</li>

								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-5">
												<div class="experience-time text-right">
													<h2>2013 - 2016</h2>
													<h3>senior UI/UX designer</h3>
												</div><--/.experience-time--
											</div><--/.col--
											<div class="col-md-offset-1 col-md-5">
												<div class="timeline">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															hoplony tech limited
														</h4>
														<h5>newyork, USA</h5>
														<p class="description">
															Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident. 
														</p>
													</div><--/.timeline-content--
												</div><--/.timeline--
											</div><--/.col--
										</div>
									</div><--/.single-timeline-box--
								</li>

								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-offset-1 col-md-5 experience-time-responsive">
												<div class="experience-time">
													<h2>
														<span><i class="fa fa-circle" aria-hidden="true"></i></span>
														2012 - 2013
													</h2>
													<h3>UI/UX designer</h3>
												</div><--/.experience-time--
											</div><--/.col--
											<div class="col-md-5">
												<div class="timeline">
													<div class="timeline-content text-right">
														<h4 class="title">
															hoplony tech limited
														</h4>
														<h5>newyork, USA</h5>
														<p class="description">
															Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident. 
														</p>
													</div><--/.timeline-content--
												</div><--/.timeline--
											</div><--/.col--
											<div class="col-md-offset-1 col-md-5 experience-time-main">
												<div class="experience-time">
													<h2>
														<span><i class="fa fa-circle" aria-hidden="true"></i></span>
														2012 - 2013
													</h2>
													<h3>UI/UX designer</h3>
												</div><--/.experience-time--
											</div>--/.col--
										</div>
									</div><--/.single-timeline-box-
								</li>

								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-5">
												<div class="experience-time text-right">
													<h2>2010 - 2012</h2>
													<h3>frontend developer</h3>
												</div><--/.experience-time--
											</div><--/.col--
											<div class="col-md-offset-1 col-md-5">
												<div class="timeline">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															hoplony tech limited
														</h4>
														<h5>newyork, USA</h5>
														<p class="description">
															Duis aute irure dolor in reprehenderit in vol patate velit esse cillum dolore eu fugiat nulla pari. Excepteur sint occana inna tecat cupidatat non proident. 
														</p>
													</div><--/.timeline-content--
												</div><--/.timeline--
											</div><--/.col--
										</div>
									</div><--/.single-timeline-box--
								</li>-->
							</ul>
						</div><!--.main-timeline-->
					</div><!--.experience-content-->
			</div>

		</section><!--/.experience-->
		<!--experience end -->

		<!--profiles start -->
		<!-- <section id="profiles" class="profiles">
			<div class="profiles-details">
				<div class="section-heading text-center">
					<h2>profiles</h2>
				</div>
				<div class="container">
					<div class="profiles-content">
						<div class="row">
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-themeforest"></i></a>
										<div class="profile-icon-name">themeforest</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-themeforest"></i></a>
											<div class="profile-icon-name">themeforest</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-dribbble"></i></a>
										<div class="profile-icon-name">dribbble</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-dribbble"></i></a>
											<div class="profile-icon-name">dribbble</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-behance-logo"></i></a>
										<div class="profile-icon-name">behance</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-behance-logo"></i></a>
											<div class="profile-icon-name">behance</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile profile-no-border">
									<div class="profile-txt">
										<a href=""><i class="flaticon-github-logo"></i></a>
										<div class="profile-icon-name">github</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-github-logo"></i></a>
											<div class="profile-icon-name">github</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="profile-border"></div>
						<div class="row">
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a>
										<div class="profile-icon-name">flickR</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a>
											<div class="profile-icon-name">flickR</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-smug"></i></a>
										<div class="profile-icon-name">smungMung</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-smug"></i></a>
											<div class="profile-icon-name">smungMung</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-squarespace-logo"></i></a>
										<div class="profile-icon-name">squareSpace</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-squarespace-logo"></i></a>
											<div class="profile-icon-name">squareSpace</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile profile-no-border">
									<div class="profile-txt">
										<a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a>
										<div class="profile-icon-name">bitBucket</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a>
											<div class="profile-icon-name">bitBucket</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section> --><!--/.profiles-->
		<!--profiles end -->

		<!--portfolio start -->
		<section id="portfolio" class="portfolio">
			<div class="portfolio-details">
				<div class="section-heading text-center">
					<h2>portfolio</h2>
				</div>
				<div class="container">
					<div class="portfolio-content">
						<div class="isotope">
							<div class="row">

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/p1.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												ui/ux design
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
									<div class="item">
										<img src="assets/images/portfolio/p2.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												ui/ux design
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/p3.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												web design
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/p4.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												web development
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
									<div class="item">
										<img src="assets/images/portfolio/p5.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												web development
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!--/.isotope-->
					</div><!--/.gallery-content-->
				</div><!--/.container-->
			</div><!--/.portfolio-details-->

		</section><!--/.portfolio-->
		<!--portfolio end -->

		<!--clients start -->
<!-- 		<section id="clients" class="clients">
			<div class="section-heading text-center">
				<h2>clients</h2>
			</div>
			<div class="clients-area">
				<div class="container">
					<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c1.png" alt="brand-image" />
							</a>
						</div><--/.item--
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c2.png" alt="brand-image" />
							</a>
						</div><--/.item--
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c3.png" alt="brand-image" />
							</a>
						</div><--/.item--
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c4.png" alt="brand-image" />
							</a>
						</div><--/.item--
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c5.png" alt="brand-image" />
							</a>
						</div><--/.item--
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c6.png" alt="brand-image" />
							</a>
						</div><--/.item--
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c7.png" alt="brand-image" />
							</a>
						</div><--/.item--
					</div><--/.owl-carousel--
				</div><--/.container--
			</div><--/.clients-area--

		</section> ----/.clients--

		</section><--/.clients--
		<--clients end -->

		<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>contact me</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<!-- <div class="contact-form"> -->
									<form class="contact-form" method="post" action="init.php">
										<div class="form-row">
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
												  <input type="text" class="form-control" id="name" placeholder="Name*" name="name" required/>
												</div><!--/.form-group-->
											</div><!--/.col-->
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email*" name="email" required/>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="form-row">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required />
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="form-row">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea type="text" class="form-control" name="message" rows="8" id="comment" placeholder="Message" required></textarea>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="form-row">
											<div class="col-sm-12">
												<div class="single-contact-btn">
													<button class="contact-btn" type="submit" name="submit">Submit</button>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								<!-- </div> --><!--/.contact-form-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-adress">
									<div class="contact-add-head">
										<h3>Rukasar Ali</h3>
										<p>Web Developer + UI/UX designer</p>
									</div>
									<div class="contact-add-info">
										<!-- <div class="single-contact-add-info">
											<h3>phone</h3>
											<p>987-123-6547</p>
										</div> -->
										<div class="contact-add-head">
											<h4>email</h4>
											<p style="text-transform: lowercase;"><i class="fa fa-envelope"></i> rukasarali03@gmail.com</p>
										</div>
										<!-- <div class="single-contact-add-info">
											<h3>website</h3>
											<p>www.brownsine.com</p>
										</div> -->
									</div>
								</div><!--/.contact-adress-->
								<div class="single-contact-add-info">
									<h3> Let's Be Internet BFFs <i class="fa fa-heart"></i></h3>
								</div>
								<div class="hm-foot-icon">
									
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li><!--/li-->
										<li><a href="https://github.com/RukasarAli"><i class="fa fa-github"></i><!--/li-->
										<!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li><--/li--
										<li><a href="#"><i class="fa fa-twitter"></i></a></li --><!--/li-->
										<li><a href="https://www.linkedin.com/in/rukasarali"><i class="fa fa-linkedin"></i></a>
										</li><!--/li-->
										<li><a href="https://www.instagram.com/rukhsaranjum_"><i class="fa fa-instagram"></i></a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->

		</section><!--/.contact-->
		<!--contact end -->

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright <a href="#">Rukasar Ali</a>.
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>