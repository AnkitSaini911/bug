<?php
$a = $_GET['b'];
echo $a;
if(isset($a))
{
  include("/var/www/html/$a");
}
?>
