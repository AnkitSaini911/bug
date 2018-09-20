<?php

$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$db="costumers";

$mysqli = new mysqli($servername, $username, $password, $db);
$query="SELECT PersonID,LastName,FirstName,Address,City from Persons WHERE PersonID='11'";
$result=$mysqli->query($query);
$num=$mysqli->mysqli_num_rows($result);
$mysqli->close();
echo "<b>
<center>Database Output</center>
</b>
<br>
<br>";
$i=0;
while ($i < $num) {
$fielda=mysql_result($result,$i,"field1-name");
$fieldb=mysql_result($result,$i,"field2-name");
$fieldc=mysql_result($result,$i,"field3-name");
$fieldd=mysql_result($result,$i,"field4-name");
$fielde=mysql_result($result,$i,"field5-name");
echo "<b>
$fielda $fieldb</b>
<br>
$fieldc<br>
$fieldd<br>
$fielde<hr>
<br>";
$i++;
}

?>



