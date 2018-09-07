 <?php

$email=$_POST["username"];
$pass=$_POST["password"];

$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$db="SQLINJECTION";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if ($conn){
	die("connection failure".mysqli_connect_error());
}

$sql="SELECT username,password from users WHERE username='$email' and password='$pass'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);
echo $sql;
echo $result;
echo $row;
if ($row){
	echo "successfull login";
}
else{
	echo "wrong pass";
}

mysqli_close($conn);


?>



