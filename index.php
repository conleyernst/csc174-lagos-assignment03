<!-- MAIN PAGE -->

<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/override.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
 	<script src="js/jquery.slides.js"></script>
	<script src="js/main.js"></script>

	<title>Assignment 3</title>
  </head>
  <body>

  <!-- php nav bars -->
	<?php include('includes/nav.php');?>

	<!-- for js slideshow plugin 
	<div id="slides">
	<img alt="Charlotte Wright" src="images/cwright.jpg">
	<img alt="Lotus May" src="images/may.jpg">

	</div>
	->

  	<!-- INSTRUCTIONS FOR DESIGNER: experiment with the different nav bars that Bootstrap offers and see what is the most visually appealing for the page. -->


<!-- This section will have a card for each of the people featured in this assignement. Each card will contain a breif amount of information, photo and a link to their page. This uses bootstrap card decks. -->

  	<!-- INSTRUCTIONS FOR DESIGNER: please experiment with CSS override in order to achieve a professional appearance. -->
	<div class="card-deck">
  		<div class="card">
  			<img class="card-img-top" src="images/cwright.jpg" alt="Charlotte Wright Image">
  			<div class="card-block">
  				<h4 class="card-title">Charlotte Wright</h4>
  				<!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->

  				<!-- expandable button -->
  				<p>
  				 <!--  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  				    Link with href
  				  </a> -->
  				  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Meet Charlotte
  				  </button>
  				</p>
  				<div class="collapse" id="collapse1">
  				  <div class="card card-block">
  				    <p><strong>Major:</strong> Computer Scince</p>
  				    <p><strong>From:</strong> New York</p>
  				    <p><strong>Class of 2018</strong></p>
  				    <a class="btn btn-outline-primary" href="charlottewright.php" role="button">Learn More</a>
  				  </div>
  				</div>
  			</div>
  		</div>
  		<div class="card">
				<img class="card-img-top" src="images/may.jpg" alt="Lotus May Image">  			
				<div class="card-block">
  				<h4 class="card-title">Lotus May</h4>
  				<!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->

  				<!-- expandable button -->
  				<p>
  				 <!--  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  				    Link with href
  				  </a> -->
  				  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Meet May
  				  </button>
  				</p>
  				<div class="collapse" id="collapse2">
  				  <div class="card card-block">
  				    <p><strong>Majors:</strong> Computer Scince and Business</p>
  				    <p><strong>From:</strong> Myanmar</p>
  				    <p><strong>Class of 2020</strong></p>
  				    <a class="btn btn-outline-primary" href="lotusmay.php" role="button">Learn More</a>
  				  </div>
  				</div>
  			</div>
  		</div>
  		<div class="card">
				<img class="card-img-top" src="images/conley.jpg" alt="Conley Ernst Image">  			
				<div class="card-block">
  				<h4 class="card-title">Conley Ernst</h4>
  				<!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->

  				<!-- expandable button -->
  				<p>
  				 <!--  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  				    Link with href
  				  </a> -->
  				  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Meet Conley
  				  </button>
  				</p>
  				<div class="collapse" id="collapse3">
  				  <div class="card card-block">
  				    <p class="card-text"><strong>Majors:</strong> Computer Scince and Digital Media Studies</p>
  				    <p class="card-text"><strong>From:</strong> Massachusetts</p>
  				    <p class="card-text"><strong>Class of 2019</strong></p>
  				    <a class="btn btn-outline-primary" href="conleyernst.php" role="button">Learn More</a>
  				  </div>
  				</div>
  			</div>
  		</div>
  		<!-- <div class="card">
  			<img class="card-img-top" src="images/may.jpg" alt="Lotus May Image">
  			<div class="card-block">
  				<h4 class="card-title">Lotus May</h4>
  				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  			</div>
  		</div>
  		<div class="card">
  			<img class="card-img-top" src="images/conley.jpg" alt="Conley Ernst Image">
  			<div class="card-block">
  				<h4 class="card-title">Conley Ernst</h4>
  				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
  			</div>
  		</div> -->
  	</div>

<!-- END CARD SECTION -->

<!-- WHY CS SECTION: this section explains how the different elements in this page are interconnected 
 -->

<!-- INSTRUCTION FOR DESIGNER: Experiement with placement of this section, adding this component of "Why Women in Comp Sci" in order to tie each of our people together. Experiment with how the title and block of text works with the rest of the page. -->

<div class="why-cs">
	<h2>Women in Computer Science</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>


<!-- INSTRUCTIONS FOR CODER: Please insert some kind of slideshow below the cards, content will be stored in images folder -->



<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>