<!DOCTYPE html>
<!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
Will Thompson
csc155 -->
<html>
<head>
<?php
function userChecker($username,$password,$cPassword)
{
	if($password != $cPassword){
		return "confirm error";
	}
	else if($username == "" || $password == ""){
		return "value error";
	}
	else{
		return "True";
	}
}

if (isset($_POST['submit']))
{
	$username=htmlentities($_POST['username']);
	$password=htmlentities($_POST['password']);
	$cPassword=htmlentities($_POST['cPassword']);
	$email=htmlentities($_POST['email']);
	$thegroup=htmlentities($_POST['thegroup']);
	$result = userChecker($username,$password,$cPassword);
	if ($result == "confirm error"){
		echo $result;
	}
	else if($result == "value error"){
		echo $result;
	}
	else if($result == "True")
	{
		$password=crypt($password,"sea");
		$user = "wthompson25";
		$conn = mysqli_connect("localhost",$user,$user,$user);
		if (mysqli_connect_errno()) {
        		echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
		}
		else{
			$stmt = $conn->prepare("INSERT INTO phpSite4 (username, password, email, thegroup ) VALUES (?, ?, ? ,? )");
			$stmt->bind_param("ssss", $username, $password, $email, $thegroup,  );
			$stmt->execute();
			header("Location: login.php");
		}

	}
}
else if (isset($_POST['cancel']))
{
	header("Location: login.php");
}
?>
</head>
<body>
<h1> Create New User</h1>
<form method='POST'>
<label for='username'>Username:</label>
<input type='text' name='username'><br>
<label for='password'>Password:</label>
<input type='password' name='password'><br>
<label for='cPassword'>Confrom Password:</label>
<input type='password' name='cPassword'><br>
<label for='email'>Email:</label>
<input type='text' name='email'><br>
<label for='thegroup'>Group:</label>
<input type='text' name='thegroup'><br>
<input type='submit' name='submit' value='submit'>
<input type='submit' name='cancel' value='cancel'>


</body>
</html>
