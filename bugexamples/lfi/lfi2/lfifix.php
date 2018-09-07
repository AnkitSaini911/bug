<?php
$a = $_GET['b'];
$valid = array('test.html','test.php');
if (!in_array($a, $valid, true)) {
    die("invalid  value");
}

include("$a");

?>



