<!DOCTYPE html>
<html lang="en-US">

<div class="container">
<head>
  <?php 
 	include'includes/links.php';
 	?>
	<meta charset="utf-8">


	<title>Computer Science Students in CSC174</title>
</head>

<body id="body1">
	<!--Done--><!--TO CODER: Please implement php code to create a menu highlighter for the current page-->
	<!--TO Design Artist: Make the navbar look better and easier to use. Maybe have them be horizontal, right aligned, with the city name left aligned. The city name can act as a logo, and also linked to the home page. Also please add css for when hovering over nav elements.-->
	<?php include 'includes/navigation.php';?>
	
	<?php include 'includes/script.php';?>
	
	<h1>Computer Science Students in CSC174</h1>
	<div class="top">
	<div>
		<p>This page is dedicated to three students that all study Computer Science at the University of Rochester and all three also happen to be taking the course CSC174 - Advanced Front-End Web Design, in Spring 2018. You can learn more about the individual students, their academic and professional careers on their individual pages.</p>
	</div>
</div>
	<!--Done--><!-- TO CODER: Please make sure the flexslider is implemented correctly and works-->
	<!-- TO Design Artist: Please make the flexslider make better. Maybe make it smaller instead of fullscreen so that the images are not distorted. Place a nice frame around the images that fit well with the rest of the color scheme of your choice-->
	
		<div class="container2">	
  		<div class="slides">
  		<ul class="rslides">
		<li> <img src="images/kyle.jpg" alt="picture of Kyle"> </li>
		<li><img src="images/sid.jpg" alt="picture of Sidhant"></li>
		<li><img src="images/face.jpg" alt="picture of Zubair"> </li>
		</ul>
		</div>
	
   
	<h2>Kyle Pollock</h2> 
	<div class="wrap">
	<p>My name is Kyle Pollock. I am a Computer Science student of Class '18. I am also minoring in Chinese Language and Culture.</p>
</div>

	<h2>Sidhant Ahluwalia</h2>
	<div class="one">
	<p>I'm a computer science major at the University of Rochester. My area of study is focused in Human-computer Interaction, ties in my interest in learning how design can make or break a product.</p>
</div>
	<h2>Zubair Aziz</h2>
	<div class="two">
	<p>My name is Zubair Aziz. I am 21 years old. I was born on April 28, 1996. My hometown is Kuala Lumpur, Malaysia. I am currently a junior, anticipated to graduate in May, 2019.</p>
</div>

</body>
<footer>
    <p>Copyright @ Information Architect: Forest Shi, Design Artist: Qianyi Li, Coder: Praphul </p>
</footer>
</div>
</html>