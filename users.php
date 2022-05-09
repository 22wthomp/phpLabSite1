<!DOCTYPE html>
<html>
<head>
<?php
echo"<h1>Users</h1>";
readfile("library/header.html");
echo"<br><br><br>";
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
                $id= $row["id"] ;
                $username= $row["username"] ;
                $password= $row["password"] ;
                $email= $row["email"] ;
                $thegroup= $row["thegroup"] ;
	echo "id: $id username:<b> $username</b> password:<b> $password</b> email:<b> $email</b> thegroup:<b> $thegroup</b><br><br><br>";
		}
	}
}

?>
</head>
<body>


<?php readfile("library/footer.html"); ?>

</body>
</html>
