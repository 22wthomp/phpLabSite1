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
	$user = "wthompson25";
	$conn = mysqli_connect("localhost",$user,$user,$user);
	if (mysqli_connect_errno()) {
        	echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
	}
	else {
		$sql = "SELECT * FROM phpSite4";
	        $result = $conn->query($sql);

        	if ($result->num_rows > 0) {
        		while($row = $result->fetch_assoc()) {
//                		echo "id: " . $row["id"]. "<br>";
//				echo "name: " . $row["username"] . "<br>";
				$tableUser= $row["username"] ;

				if ($username == $tableUser) {
					echo "found it:";
					$tablePass= $row["password"] ;
					if (crypt($password,"sea") == $tablePass)
					{
						return True;
					}else{
						return False;
					}
					echo $tablePass;
				}
			}
		}
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
<h2>do not use real passwords</h2>
<a href="createLogin.php">Create New user</a>
<form method='POST'>
<label for='username'>Username:</label>
<input type='text' name='username'><br>
<label for='password'>Password:</label>
<input type='password' name='password'><br>
<input type='submit' name='login' value='login'><br>
username is<B> bug</B> password is<B> insect</B><br><br>
</body>
</html>
