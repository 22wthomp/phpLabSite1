<!DOCTYPE html>
<html>
<head>
<?php
require("library/functions.php");
session_start();
$product = 'vader';
if(!isset($_SESSION['username']))
{
        header("Location: login.php");
}
else if ($_POST['buy'] == 'buy')
{
	if (isset($_SESSION['vader']))
	{
		$_SESSION['vader'] += $_POST['vader'];
	}else{
		$_SESSION['vader'] = $_POST['vader'];
	}
}
else if ($_POST['remove1'] == 'remove one')
{
	$_SESSION['vader'] -=1;
}
else if ($_POST['removea'] == 'remove all')
{
	$_SESSION['vader'] -= $_SESSION['vader'];
}
	
?>
</head>
<body>
<?php readfile("library/header.html"); ?>
<h2>Darth Vader Lightsaber</h2><br>
<form method='POST'>
Please enter the number of Darth Vader Lightsabers you would like to purchase<br>
<input type='number' name='vader'><br>
<input type='submit' name='buy' value='buy'>
<input type='submit' name='remove1' value='remove one'>
<input type='submit' name='removea' value='remove all'>
</form>
Amount in Cart
<?php theSession($product);?><br>
<?php readfile("library/footer.html"); ?>
</body>
</html>
