<?php

$id=$_GET["id"];

$db_host = '127.0.0.1'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'toor'; // Password
$db_name = 'costumers'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT PersonID,LastName,FirstName,Address,City from Persons where PersonID='$id'";
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo "<table border='1'>
<tr>
<th>id</th>
<th>lastname</th>
<th>Firstname</th>
<th>address</th>
<th>city</th>
</tr>";

while($row = mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['PersonID'] . "</td>";
echo "<td>". $row['LastName']."</td>";
echo "<td>". $row['FirstName']."</td>";
echo "<td>". $row['Address']."</td>";
echo "<td>". $row['City']."</td>";




echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
