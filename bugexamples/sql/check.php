 <?php
echo "hello";

$email=$_POST["username"];
$pass=$_POST["password"];

$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$db="SQLINJECTION";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if (!$conn){
	die("connection failure".mysqli_connect_error());
}


$sql="SELECT username,password FROM users";
$result = mysqli_query($conn, $sql);


//if (mysqli_num_rows($result) > 0){

$row = mysqli_fetch_assoc($result);

if($row["username"]==$email && $row["password"]==$pass){
	echo "found";
}
else{
echo "not found";
}

mysqli_close($conn);


?>



