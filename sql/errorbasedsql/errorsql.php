<?php


$email=$_POST["username"];
$pass=$_POST["password"];

$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$db="SQLINJECTION";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn){
	die("connection failure".mysqli_connect_error());
}

$sql="SELECT PersonID,LastName,FirstName,Address,City from Persons WHERE PersonID='$ID'";
$result = mysqli_query($conn, $sql);
echo $sql;

$row = mysqli_fetch_assoc($result);
if ($row){
	echo "\n"; 
	echo "successfull login";
}
else{
	echo "wrong pass";
}

mysqli_close($conn);


?>



