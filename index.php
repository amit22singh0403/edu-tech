<?php
session_start();
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
	<!--SWIPER JS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

	
</head>
<body>
	<nav>
		<div class="container nav__container">
			<a href="index.html"><h4>EduTech</h4></a>
			<ul class="nav__menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li>

			    <?php
				if (isset($_SESSION['user'])){$u = $_SESSION['name'];
				?>
				<a href="profile.php"><h4> Hello  <?php  echo $u; ?> </h4></a>
  			
			<?php}else{?>
				
		 	<?php }?>
				</li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
	</div>
	</nav>
	<header>
		<div class="container header__container">
			<div class="header__left">
				<h1>Grow your skills here.</h1>
				<p>
					EduTech is an online learning platform for everyone. We provide a wide range of courses, from programming to design, to help you learn the skills you need to succeed in today's economy.
				</p><?php
				if (isset($_SESSION['user'])){$u = $_SESSION['name'];
				?>
				<a href="courses.php" class="btn btn-primary">See Courses</a><?php
				}else{
				?>
                <a href="loginpage.php" class="btn btn-primary">Get Started</a>
				<?php }
				 ?>
              </li>
			</div>
		<div class="header__right">
			<div class="header__right-image">
				<img src="./images/header.png">
			</div>
		</div>
		</div>
	</header>
	<!--############################################END OF HEADER############################################################-->




	<section class="categories">
		<div class="container categories__container">
			<div class="categories__left">
				<h1>Categories</h1>
				<p>
					Tired of spending hours searching for the right product?
					Let EduTech take care of it for you.
				</p>
				<a href="#" class="btn">Learn More</a>
			</div>
			<div class="categories__right">
				<article class="category">
					<span class="category__icon"><i class="uil uil-bitcoin-circle"></i></span>
					<h5>BlockChain</h5>
					<p>We provide a decentralized platform for educators and students to connect and share resources. With our platform, educators can create and manage their courses.</p>
				</article>


				<article class="category">
					<span class="category__icon"><i class="uil uil-palette"></i></span>
					<h5>Graphic Design</h5>
					<p>Are you looking to learn Graphic Design from scratch? In this video, I'm going to cover all the basics of Graphic Design and show you how you can create stunning visuals with ease. </p>
				</article>


				<article class="category">
					<span class="category__icon"><i class="uil uil-usd-circle"></i></span>
					<h5>Finance</h5>
					<p>Are you looking for an easy way to gain a better understanding of finance concepts? Look no further! This video will guide you through the fundamentals of finance.</p>
				</article>


				<article class="category">
					<span class="category__icon"><i class="uil uil-megaphone"></i></span>
					<h5>Marketing</h5>
					<p>We have a wide range of courses, from social media marketing to email marketing, and we cater to all levels of students, from beginners to experts.</p>
				</article>


				<article class="category">
					<span class="category__icon"><i class="uil uil-brackets-curly"></i></span>
					<h5>Coding</h5>
					<p>Ready to become a coding expert? These videos will show you how to become a coding master in no time.</p>
				</article>


				<article class="category">
					<span class="category__icon"><i class="uil uil-puzzle-piece"></i></span>
					<h5>Business</h5>
					<p>Are you looking for the perfect business course to take your career to the next level? Look no further! In these videos</p>
				</article>
			</div>
		</div>
	</section>
<!--********************************************END OF CATAGORIES************************************************************-->
	


	<section class="courses">
		<h2>Popular Courses</h2>
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
				<a href="courses.php" class="btn btn-primary">Learn More</a>
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
				<a href="courses.php" class="btn btn-primary">Learn More</a>
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
					<a href="courses.php" class="btn btn-primary">Learn More</a>
				</div>
			</article>
		</div>
	</section>
<!--********************************************END OF POPULAR COURSES************************************************************-->


	<section class="faqs">
		<h2>Frequently Asked Questions</h2>
		<div class="container faqs__container">
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>What methods of payment do you accept?</h4>
					<p>
						It is a free e-Learning platform. We do not accept any type of charges.
					</p>
				</div>
			</article>


			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>Are there any prerequisites for taking a course?</h4>
					<p>
						We provide courses ranging from beginners to advanced level. You can do a course as you require.
					</p>
				</div>
			</article>


			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>Does the course include any tests or assessments?</h4>
					<p>
						These courses are pre-made by people our platform just provide it collectively, so there are no test or assessments.
					</p>
				</div>
			</article>


			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>How long does each course last?</h4>
					<p>
						The lenght of courses varies according to your subject, which can range from 3hrs to 50 hrs.
					</p>
				</div>
			</article>


			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>What types of e-learning courses do you offer?</h4>
					<p>
						We provide variety of courses for you to selsct from. Coding, Blockchain, Marketing, Finance are some examples of courses we provide on this platform. 
					</p>
				</div>
			</article>
		</div>
	</section>
<!--********************************************END OF FAQ's************************************************************-->

	<section class="container testimonials__container mySwiper">
		<h2>Students' Testimonials</h2>
		<div class="swiper-wrapper">
			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/student1.jpg">
				</div>
				<div class="testimonial__info">
				<h5>Sidharth Sandilya</h5>
				<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						I recently subscribed to EduTech, and it has been a great learning experience! The courses are well structured and the content is comprehensive. I'm also very impressed with the customer service, which is always prompt and helpful in addressing any queries. All in all, it's an excellent e-learning platform that I highly recommend!
					</p>
				</div>
			</article>
			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/student5.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Krish Jain</h5>
					<small>Student</small>
					</div>
				<div class="testimonial__body">
					<p>
						I've been using EduTech for a few months now and I'm absolutely amazed with their platform. I have been able to access quality learning material, which has allowed me to grow my skills in a variety of fields. The convenience of the website is top-notch, as it has all the features you could need and more. Plus, the customer service team is always available if you ever have any issues or questions. Highly recommend EduTech!
					</p>
				</div>
			</article>
			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/student4.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Shashwat Pathak</h5>
					<small>Student</small>
					</div>
				<div class="testimonial__body">
					<p>
						I recently switched to EduTech from another e-learning website and I'm so glad that I did. It's easy to use and has a vast array of courses for every level of learner, from beginner to advanced. The best part? It's all online, so you can access the materials anytime and anywhere. Plus, the customer service is great! I highly recommend it for anyone looking to learn something new or brush up on their existing skills.
					</p>
				</div>
			</article>
			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/student3.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Chirag Rajput</h5>
					<small>Student</small>
					</div>
				<div class="testimonial__body">
					<p>
						I recently switched to EduTech from another e-learning website and I'm so glad that I did. It's easy to use and has a vast array of courses for every level of learner, from beginner to advanced. The best part? It's all online, so you can access the materials anytime and anywhere. Plus, the customer service is great! I highly recommend it for anyone looking to learn something new or brush up on their existing skills.
					</p>
				</div>
			</article>
			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/student2.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Vashnavi Rajput</h5>
					<small>Student</small>
					</div>
				<div class="testimonial__body">
					<p>
						I recently had the opportunity to use EduTech and it has completely changed the way I learn. The website is well organized, user friendly, and full of useful e-learning material. All the content is up to date and easy to understand. My favorite part about EduTech was their customer support which was always prompt and helpful in addressing any queries or issues I may have had. Overall, a great e-learning platform for anyone looking to improve their knowledge!
					</p>
				</div>
			</article>
		</div>
		<div class="swiper-pagination"></div>
	</section>

	<!--####################################FOOTER###########################################-->

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
				<p>trialrdp33@gmail.com</p>
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
			<small>Copyright &copy; Amit Singh</small>
		</div>
	</footer>


	<script src="./index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
	  //on bigger screen//
	  breakpoints: {
		600: {
			slidesPerView: 2
		}
	  }
    });
	</script>
</body>
</html>
