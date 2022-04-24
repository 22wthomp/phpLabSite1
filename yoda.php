<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
        header("Location: login.php");
}
?>
</head>
<body>
<?php readfile("library/header.html"); ?>
<h2>Yoda Lightsaber</h2>


<?php readfile("library/footer.html"); ?>
</body>
</html>


