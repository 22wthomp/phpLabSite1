<!DOCTYPE html>
<html>
<body>
<?php
session_start();
if(!isset($_SESSION['username']))
{
        header("Location: login.php");
}else{
	header("refresh:5;url=goodBye.php");
	readfile("library/header.html");
	echo"<h2>Goodbye</h2>";

	readfile("library/footer.html");
	echo"</body>";
	echo"</html>";
	session_unset();
}
?>


