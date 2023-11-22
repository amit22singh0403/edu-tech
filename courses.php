<?php
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
	
}else{
	header('location:loginpage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EduTech</title>
	<link rel="stylesheet" href="./css/index.css">
	<!--IconScout--> 
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<!--GoogleFonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .courses{
            margin-top: 1rem;
        }
    </style>
</head>
<body>
	<nav>
		<div class="container nav__container">
			<a href="index.php"><h4>EduTech</h4></a>
			<ul class="nav__menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</nav>

    <section class="courses">
		<div class="container courses__container">
			<article class="course">
				<div class="course__image">
					<img src="./images/course1.jpg">
				</div>
				<div class="course__info">
				<h4>Python Beginner Tutorial</h4>
				<p>
					EduTech is a website that offers Python tutorials for beginners. We believe that anyone can learn to code, and our goal is to make it as easy and accessible as possible.
				</p>
				<a href="./playlist/playback.php?id=1" class="btn btn-primary">Start Learning</a>
				</div>
			</article>

			<article class="course">
				<div class="course__image">
					<img src="./images/course2.jpg">
				</div>
				<div class="course__info">
				<h4>Finance Study</h4>
				<p>
					We offer a wide range of courses and programs that cater to individuals, businesses, and organizations of all sizes. Our mission is to empower people with the knowledge and skills they need to make sound financial decisions.
				</p>
				<a href="./playlist/playback.php?id=2" class="btn btn-primary">Start Learning</a>
				</div>
			</article>

			<article class="course">
				<div class="course__image">
					<img src="./images/course3.jpg">
				</div>
				<div class="course__info">
					<h4>Graphic Design Basics</h4>
					<p>
						We offer tutorials on a variety of topics, from Photoshop and Illustrator to web design and logo design. We also have a forum where you can ask questions and get feedback from other designers.
					</p>
					<a href="./playlist/playback.php?id=3" class="btn btn-primary">Start Learning</a>
				</div>
			</article>
		</div>
	</section>

<footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.php" class="footer__logo"><h4>EDUTECH</h4></a>
            <p>
			Learn, Grow, and Succeed with Edutech.
            </p>
        </div>
        <div class="footer__2">
            <h4>Permalinks</h4>
            <ul class="permalinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="footer__3">
            <h4>Privacy</h4>
            <ul class="privacy">
					<li><a href="https://www.privacypolicyonline.com/live.php?token=sBkM19TmdAsGCmblYMbqzaXWbhQFhPRa" target="_blank">Privacy Policy</a></li>
					<li><a target="_blank" href="https://www.privacypolicyonline.com/live.php?token=W45We3Wa0ENiV4teqI7Ijw4uXYeNb3c0">Terms and conditions</a></li>
				</ul>
        </div>
        <div class="footer__4">
		<h4>Contact Us</h4>
				<p>+91-7500528418</p>
				<p>trialrddp33@gmail.com</p>
        <ul class="footer__socials">
            <li>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-instagram-alt"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-linkedin-alt"></i></a>
            </li>
        </ul>
        </div>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; Amit Singh and Chirag Singh</small>
    </div>
</footer>


<script src="./index.js"></script>
</body>
</html>
