<!-- Lotus May PAGE-->

<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/override.css">
	<link rel="stylesheet" href="css/fonts/f1/stylesheet.css">
  <link rel="stylesheet" href="css/fonts/f2/stylesheet.css">

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
	      <img class="card-img-top" src="images/may.jpg" alt="Lotus May Image">
	      <!-- IMAGE OF PERSON HERE -->

	      <!-- BASIC INFORMATION -->
	    </div>
	    <div class="col">
	    
	      <!-- MORE IN DEPTH INFORMATION ON PERSON HERE -->
	      <div class="card">
	      	     	<div class="card-block">
	      	      		<h3 class="card-title">Meet May!</h3>
	      	      		<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
	      	      		<p class="card-text"><strong>Majors:</strong> Computer Scince and Business</p>
	        				<p class="card-text"><strong>Class of 2020</strong></p>

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
	      				        University of Rochester: IT and Resnet Consultant
	      				        Brightseed Dates: Sales and Marketing Analyst
	      				        Kaymu Myanmar: Venture Development Intern
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
	      				        I am currently in an NSF-ICorps team called Pixafari. We are 6 members team who are building a Group Travel organizing platform. Some of us are Computer Science majors, one Data Science but all of us are fill with entrepreneur spirit. Apart from Pixafari, I am currently also working as Study Zone Leader in CETL study zone. It's a newly created study space to assist students in studying.
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
	      				        <p class="mb-0">I choose Com Sci because since young I am super interested in IT and technology. I was in Chemical Engineering during my first month in Freshman Year. Three hours long lab and Organic Chemistry forced me to realize Chem E is definitely not for me. So I switched to explore my interest in Computer Science and was amazed by its bounty potential and impacts it is having and it will have in the future.</p>
	      				        	<footer class="blockquote-footer"><cite title="Source Title">May Shin Lyan</cite></footer>
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