<!DOCTYPE html>
<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
Will Thompson
csc155 -->
<html>
<head>
<title></title>
<?php
function checker($username,$password)
{
	if($username == "MrCool95" &&  $password == "EpicPassword"){
		return True;
	}
	else{
		return False;
	}
}
session_start();
if (isset($_POST['login']))
{
	$username=htmlentities($_POST['username']);
	$password=htmlentities($_POST['password']);
	$theAnwser=checker($username,$password);
	if ($theAnwser == True){
		echo "Login successsful";
		header('Location: welcome.php');
		$_SESSION['username'] = $_POST['username'];
	}
	
	else{
		echo "Invalid Username";
	}	
}
?>
</head>
<body>
<?php readfile('library/header.html'); ?>
<h2>do not use real passwords</h2>
<form method='POST'>
<label for='username'>Username:</label>
<input type='text' name='username'><br>
<label for='password'>Password:</label>
<input type='password' name='password'><br>
<input type='submit' name='login' value='login'><br>
username is<B> MrCoo195</B> password is<B> EpicPassword</B>
<?php readfile('library/footer.html'); ?>
</body>
</html>
