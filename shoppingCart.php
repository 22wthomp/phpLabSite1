<!DOCTYPE html>
<html>
<head>
<?php
session_start();
require("library/functions.php");
if(!isset($_SESSION['username']))
{
        header("Location: login.php");
}
else if ($_POST['purchase'] == 'Submit Purchase')
{
    echo 'Your Purchase has been submitted';
    $_SESSION['vader'] = 0;
    $_SESSION['maul'] = 0;
    $_SESSION['skywalker'] = 0;
    $_SESSION['yoda'] = 0;
}
else if ($_POST['delete'] == 'Clear Shopping Cart')
{
    $_SESSION['vader'] = 0;
    $_SESSION['maul'] = 0;
    $_SESSION['skywalker'] = 0;
    $_SESSION['yoda'] = 0;
}
?>
</head>
<body>
<?php readfile("library/header.html"); ?>
<h2>Shopping Cart</h2>
Items in Cart:<br>
Darth Vader Lightsabers: <?php theSession("vader");?><br>
Darth Maul Lightsabers: <?php theSession("maul");?><br>
Luke Skywalker Lightsabers: <?php theSession("skywalker");?><br>
Yoda Lightsabers: <?php theSession("yoda");?><br>
<form method='POST'>
<input type='submit' name='purchase' value='Submit Purchase'>
<input type='submit' name='delete' value='Clear Shopping Cart'>
</form>
<?php readfile("library/footer.html"); ?>
</body>
</html>


