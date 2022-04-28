<!DOCTYPE html>
<html>
<head>
<?php
require("library/functions.php");
session_start();
$product = 'yoda';
if(!isset($_SESSION['username']))
{
        header("Location: login.php");
}
else if ($_POST['buy'] == 'buy')
{
        if (isset($_SESSION['yoda']))
        {
                $_SESSION['yoda'] += $_POST['yoda'];
        }else{
                $_SESSION['yoda'] = $_POST['yoda'];
        }
}
else if ($_POST['remove1'] == 'remove one')
{
        $_SESSION['yoda'] -=1;
}
else if ($_POST['removea'] == 'remove all')
{
        $_SESSION['yoda'] -= $_SESSION['yoda'];
}

?>
</head>
<body>
<?php readfile("library/header.html"); ?>
<h2>Yoda Lightsaber</h2>
<form method='POST'>
Please enter the number of Yoda Lightsabers you would like to purchase<br>
<input type='number' name='yoda'><br>
<input type='submit' name='buy' value='buy'>
<input type='submit' name='remove1' value='remove one'>
<input type='submit' name='removea' value='remove all'>
</form>
Amount in Cart
<?php theSession($product);?><br>
<?php readfile("library/footer.html"); ?>
</body>
</html>


