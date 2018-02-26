<!-- Charlotte Wright PAGE -->

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
  	<!-- INSTRUCTIONS FOR DESIGNER: experiment with the different nav bars that Bootstrap offers and see what is the most visually appealing for the page. -->

  	<?php include('includes/nav.php');?>


  <!-- 	This section determines the two collumn layout of the page. -->

	<!-- INSTRUCTION FOR DESIGNER: Experiment with sizing of each component-->

	<div class="container">
	  <div class="row">
	    <div class="col">
	      <img class="card-img-top" src="images/cwright.jpg" alt="Charlotte Wright Image">
	      <!-- IMAGE OF PERSON HERE -->

	      <!-- BASIC INFORMATION -->
	    </div>
	    <div class="col">
	      <!-- MORE IN DEPTH INFORMATION ON PERSON HERE - MULTIPARAGRAPH -->
	      <div class="card">
	      	      	<div class="card-block">
	      	      		<h3 class="card-title">Meet Charlotte!</h3>
	      	      		<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
	      	      		<p class="card-text"><strong>Majors:</strong> Computer Scince</p>
	        				<p class="card-text"><strong>Class of 2018</strong></p>

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
	      				        Last summer I worked at IBM as a Research Intern. I worked with Docker, tested performance GATK4 pipelines in cloud systems using Apache Spark, and focused on Sequencing Data and Genotyping. The summer of 2016, I worked at the New York Power Authority as a Developmental Intern for the Electronic Records Management Department. I worked in the Digital Warehouse Department and worked with variety of projects using SharePoint as a collaborative workspace. 

	      				        I have also been a Workshop Leader for The Science of Programming and The Science of Data Structures. I am also currently a TA for Python, CSC 161. I have overall taken a lot of Computer Science classes. I’m from lower NY, an hour from NYC. I am the oldest of 4 but also the shortest.
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
	      				        I am the president of the University of Rochester Cinema Group. We should free movies every week and lots of other events. Check out the Cinema Group’s website: http://sa.rochester.edu/urcg/index.
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
	      				        <blockquote class="blockquote">
	      				        	<p class="mb-0">I have always liked computers so I took a simple computer science in high school, enjoyed it and kept going from there.</p>
	      				        	<footer class="blockquote-footer"><cite title="Source Title">Charlotte Wright</cite></footer>
	      				        </blockquote>
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