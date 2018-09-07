<?php
$a = $_GET['b'];
echo $a;
if(isset($a))
{
  include("$a");
}
?>
