<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<link rel = "stylesheet" href = "../css/style.css" />
</head>
<?php
	$home= "button";
	$charlotteWright = "button";
	$lotusMay = "button";
	$patriceDouge = "button";
	$activePage= basename($_SERVER['PHP_SELF']);

	if($activePage=="index.php"){
		$home = 'activeButton';
	} else if($activePage=="charlotteWright.php"){
		$charlotteWright = 'activeButton';
	}else if($activePage =="lotusMay.php"){
		$lotusMay = 'activeButton';
	}else if($activePage == "patriceDouge.php"){
		$patriceDouge = 'activeButton';
	}
?>

<nav class="menu">
	<ul>
		<li><a class = "<?php echo $home;?>" href = "index.php">Home</a></li>
		<li><a class = "<?php echo $charlotteWright;?>" href = "charlottewright.php">Charlotte Wright</a></li>
		<li><a class = "<?php echo $lotusMay;?>" href = "lotusmay.php">Lotus May</a></li>
		<li><a class = "<?php echo $patriceDouge;?>" href = "patricedouge.php"> Patrice Douge</a></li>
	</ul>
</nav>
</html>


