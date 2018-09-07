<?php

// Grab User submitted information
$email = $_POST["username"];
$pass = $_POST["password"];

// Connect to the database
$con = mysql_connect("localhost","root","toor");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("SQLINJECTION",$con);

$result = mysql_query("SELECT username, password FROM username  = $email");

$row = mysql_fetch_array($result);

if($row["username"]==$email && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>

