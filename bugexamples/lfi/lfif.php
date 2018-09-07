<?php
    $a=$_GET['page'];
	if ($a=="1.php")
	{
    		include($a); 
    		echo "hello".$a;
	}

	elseif ($a=="2.php")
	{
		include($a);
	}

	elseif ($a=="3.php")
	{
		include($a);
	}
 	else 
	{	
		echo "invalid page";
	}

?>
