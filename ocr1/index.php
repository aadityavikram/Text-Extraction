<!DOCTYPE html>
<?php
	include("includes/connection.php");
	include("login.php");
?>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
    <title>OCR</title>
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
	<script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
	<link rel="shortcut icon" href="o.ico" type="image/x-icon">
    <link rel="icon" href="o.ico" type="image/x-icon">
</head>
<body id="top">
	<header class="s-header">
	<!-- <div class="header-logo">
        <a class="site-logo" href="index.html">
            <img src="images/logo.png" alt="Homepage">
        </a>
    </div> -->
	<nav class="header-nav">
		<a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
			<div class="header-nav__content">
                <h3>Navigation</h3>
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
					<li class="current"><a class="smoothscroll"  href="#map" title="map">Find Us Here</a></li>
					<li class="current"><a href="login-form.php" title="login" target="_blank">Login</a></li>
					<li class="current"><a href="register-form.php" title="signup"  target="_blank">Sign Up</a></li>
				</ul>
				<ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
			</div>
		</nav>
		<a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
	</header>
	<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/iron.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
		<div class="overlay"></div>
        <div class="shadow-overlay"></div>
		<div class="home-content">
			<div class="row home-content__main">
				<h3>Welcome to Optical Character Recognition Program</h3>
				<h2 style="color:white;">
                    We are here with Text-Recognition and we <br>
                    intend towards extraction of text from images <br>
                    by making use of tesseract or opencv library <br>
                    provided in Python.
                </h2>
				<div class="home-content__buttons">
                    <a href="#clients1" class="smoothscroll btn btn--stroke">
                        Go to Translate
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>
			</div>
		</div>
		<ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
    </section>
	
	<section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">We Are v3$p3rt1n3</h1>
            </div>
        </div>
		<div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
					We are a group of four developers. We have just started development, so why call ourselves developers? Because it is not the present that matters but the future it is that we seek. So presenting to you the members of <strong>v3$p3rt1n3</strong> :<br/>
					Ashish Kumar<br/>
					Malikaa Singh<br/>
					Rahul Vishnoi<br/>
					Aaditya Vikram<br/>
                </p>
            </div>
        </div>
		<div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
            <div class="col-block stats__col ">
                
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">100</div>
                <h5>Cups of Coffee</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1</div>
                <h5>Project Completed</h5>
            </div>
            <div class="col-block stats__col">
                
            </div>
		</div>
	</section>
	
	<section id="clients1" class="s-clients">
		
		 <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Images</h3>
                <h2 class="display-2">These are the images from which text has to be extracted :</h2>
            </div>
        </div>
		
        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">
					<div class="testimonials__slide">
						<a href="translateimage1.php" target="_blank"><img src="ocr/6.jpg" alt="Member" style="height:400px; width:400px; margin-left:28%;"></a>
						<div class="testimonials__info">
                            <span class="testimonials__name">Image 1</span> 
                        </div>
					</div>
					<div class="testimonials__slide">
						<a href="translateimage2.php" target="_blank"><img src="ocr/example_01.png" alt="Member" style="height:400px; width:400px; margin-left:28%;"></a>
						<div class="testimonials__info">
                            <span class="testimonials__name">Image 2</span> 
                        </div>
					</div>
					<div class="testimonials__slide">
						<a href="translateimage3.php" target="_blank"><img src="ocr/example_03.png" alt="Member" style="height:400px; width:400px; margin-left:28%;"></a>
						<div class="testimonials__info">
                            <span class="testimonials__name">Image 3</span> 
                        </div>
					</div>
					<div class="testimonials__slide">
						<a href="translateimage4.php" target="_blank"><img src="ocr/z.png" alt="Member" style="height:400px; width:400px; margin-left:28%;"></a>
						<div class="testimonials__info">
                            <span class="testimonials__name">Image 4</span> 
                        </div>
					</div>

                </div>
                
            </div>
        </div>

    </section>
	
	<section id='translate' class="s-translate">
		<div class="row section-header has-bottom-sep" data-aos="fade-up" style="margin-top:150px;">
            <div class="col-full">
                <h1 class="display-1 display-1--light">Let's translate</h1>
            </div>
        </div>
		<div align="center">
			<h3 style="color:white">Wait! <a href="translate.php" target="_blank">click here</a> to find something interesting</h3>
		</div>
    </section>
	
	<section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Developers</h3>
                <h2 class="display-2">Thus presenting to you the members :</h2>
            </div>
        </div>

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">
					<div class="testimonials__slide">
						<img src="images/114.jpg" alt="Member" style="height:300px; width:300px; margin-left:34%; border-radius:50%;">
						<div class="testimonials__info">
                            <span class="testimonials__name">Ashish Kumar</span> 
                        </div>
					</div>
					<div class="testimonials__slide">
						<img src="images/115.jpg" alt="Member" style="height:300px; width:300px; margin-left:34%; border-radius:50%;">
						<div class="testimonials__info">
                            <span class="testimonials__name">Malikaa Singh</span> 
                        </div>
					</div>
					<div class="testimonials__slide">
						<img src="images/116.jpg" alt="Member" style="height:300px; width:300px; margin-left:34%; border-radius:50%;">
						<div class="testimonials__info">
                            <span class="testimonials__name">Rahul Vishnoi</span> 
                        </div>
					</div>
					<div class="testimonials__slide">
						<img src="images/117.jpg" alt="Member" style="height:300px; width:300px; margin-left:34%; border-radius:50%;">
						<div class="testimonials__info">
                            <span class="testimonials__name">Aaditya Vikram</span> 
                        </div>
					</div>

                </div>
                
            </div>
        </div>

    </section>
	
	<div id="map"></div>
    <div id="googleMap" style="width:100%;height:100%;"></div>
	<script>
		function myMap() {
			var mapProp= {
				center:new google.maps.LatLng(26.8467,80.9462),
				zoom:5,
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFLSJLR2HhVApMPMy1-Z3DxmyEYHI4ihw&callback=myMap"></script>
	
	<!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

	<!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>