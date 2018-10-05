<?php
echo "hello";

$email=$_POST["username"];
$pass=$_POST["password"];
//print $email;
//print $pass;
$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$db="SQLINJECTION";
// Create connection
//$conn = mysqli_connect($servername, $username, $password, $db);
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn){
	die("connection failure".mysqli_connect_error());
}
echo "success";

$stmt = mysqli_prepare($conn,"SELECT * FROM users WHERE username = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
mysqli_stmt_execute($stmt);
$row=mysqli_stmt_fetch($stmt);
//$row = mysqli_stmt_fetch($stmt);

if($row){
        echo "found";
}
else{
echo "not found";
}



mysqli_close($conn);

?>



