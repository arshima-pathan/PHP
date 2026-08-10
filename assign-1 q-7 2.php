<?php
$text=$_GET['str'];
$r=$_GET['r1'];
switch($r)
{
    case 1:
	echo"<font face='arial'>$text</font>";
	break;
	
	case 2:
	echo"<font face='times new roman'>$text</font>";
	break;
	
	case 3:
	echo"<font face='jokerman'>$text</font>";
	break;
}

?>	