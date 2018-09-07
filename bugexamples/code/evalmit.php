<?php

$output=$_POST['id'];

if (!preg_match("/[0-9\*\+\-\/]/",$output)){
  echo "invalid character";
}
else{
	eval('$a='.$output.';');
	echo $a;

}
?>
