<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "../css/override.css" />
	<link rel="stylesheet" href="../css/fonts/f1/stylesheet.css">
  <link rel="stylesheet" href="../css/fonts/f2/stylesheet.css">
	<title>Assignment 3</title>
</head>
<?php
	$home= "button";
	$charlotteWright = "button";
	$lotusMay = "button";
	$conleyErnst = "button";
	$activePage= basename($_SERVER['PHP_SELF']);

	if($activePage=="index.php"){
		$home = 'activeButton';
	} else if($activePage=="charlottewright.php"){
		$charlotteWright = 'activeButton';
	}else if($activePage =="lotusmay.php"){
		$lotusMay = 'activeButton';
	}else if($activePage == "conleyernst.php"){
		$conleyErnst = 'activeButton';
	}
?>

<nav class="menu">
	<h1>UR Women CS</h1>
		<ul>
		<li><a class = "<?php echo $home;?>" href = "index.php">Home</a></li>
		<li><a class = "<?php echo $lotusMay;?>" href = "lotusmay.php">Lotus May</a></li>
		<li><a class = "<?php echo $conleyErnst;?>" href = "conleyernst.php"> Conley Ernst</a></li>
		<li><a class = "<?php echo $charlotteWright;?>" href = "charlottewright.php">Charlotte Wright</a></li>
	</ul>
</nav>

</html>


