<!DOCTYPE html>
<html>
<head>
<?php
require("library/functions.php");
session_start();
$product = 'maul';
if(!isset($_SESSION['username']))
{
        header("Location: login.php");
}
else if ($_POST['buy'] == 'buy')
{
        if (isset($_SESSION['maul']))
        {
                $_SESSION['maul'] += $_POST['maul'];
        }else{
                $_SESSION['maul'] = $_POST['maul'];
        }
}
else if ($_POST['remove1'] == 'remove one')
{
        $_SESSION['maul'] -=1;
}
else if ($_POST['removea'] == 'remove all')
{
        $_SESSION['maul'] -= $_SESSION['maul'];
}


?>
</head>
<body>
<?php readfile("library/header.html"); ?>
<h2>Darth Maul Lightsaber</h2>
<form method='POST'>
Please enter the number of Darth Maul Lightsabers you would like to purchase<br>
<input type='number' name='maul'><br>
<input type='submit' name='buy' value='buy'>
<input type='submit' name='remove1' value='remove one'>
<input type='submit' name='removea' value='remove all'>
</form>
Amount in Cart
<?php theSession($product);?><br>
<?php readfile("library/footer.html"); ?>
</body>
</html>


