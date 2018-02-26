<!-- Conley Ernst PAGE -->

<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/override.css">

	<title>Assignment 3</title>
  </head>
  <body>

  	<?php include('includes/nav.php');?>


  	<!-- INSTRUCTIONS FOR DESIGNER: experiment with the different nav bars that Bootstrap offers and see what is the most visually appealing for the page. -->


  <!-- 	This section determines the two collumn layout of the page. -->

	<!-- INSTRUCTION FOR DESIGNER: Experiment with sizing of each component-->

	<div class="container">
	  <div class="row">
	    <div class="col">
	      
	      <div class="card">
	      	<div class="card-block">
	      		<img class="card-img-top" src="images/conley.jpg" alt="Conley Ernst Image"> 
	      	</div>
	      </div>

	      <!-- BASIC INFORMATION -->
	    </div>
	    <div class="col">
	      <div class="card">
	      	<div class="card-block">
	      		<h3 class="card-title">Meet Conley!</h3>
	      		<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
	      		<p class="card-text"><strong>Majors:</strong> Computer Scince and Digital Media Studies</p>
  				<p class="card-text"><strong>Class of 2019</strong></p>

	      		<div id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="card">
				    <div class="card-header" role="tab" id="headingOne">
				      <h5 class="mb-0">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Work Experience
				        </a>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="card-block">
				        During my short career as a computer scientist I have worked at two different startups: Shareaholic and Drift. Both of the Boston based companies develop web applications. I hope to work as a software engineer this upcoming summer and continue my professional development.

				        I also have worked on campus here at the University of Rochester. I am currently a Meridian, aka a tour guide. I give both regular and engineering campus tours. I have also previously worked as a TA for the department of computer science.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" role="tab" id="headingTwo">
				      <h5 class="mb-0">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Campus Involvement
				        </a>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="card-block">
				        Outside of the classroom I am on the Varsity Lacrosse Team and hold a position on the executive board of my sorority. I’ve played lacrosse since I was in fourth grade and am goalie on the team here at UR. In my sorority I have held the executive board position as Panhellenic Delegate and currently serve as Risk Management chairwoman. Additionally, I have held executive council positions of Chapter Historian and Sunshine Chair. Lastly, I am a recruitment counselor (Rho Gamma) for the Panhellenic Association.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" role="tab" id="headingThree">
				      <h5 class="mb-0">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Why Computer Science?
				        </a>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="card-block">
				        I came in as a freshman with the intent of majoring in Digital Media Studies and Environmental Science. As a result, I spent my freshman year taking mainly Biology and Chemistry courses. The spring semester of my freshman year I took CSC 161 in order to fulfill a Digital Media Studies Requirement; this was my first introduction programming. Though I went in with the attitude that I was going to hate it, I ended up falling in love with programming and ended up switching my second major to Computer Science.
				      </div>
				    </div>
				  </div>
				</div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- END two collumn layout -->


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>