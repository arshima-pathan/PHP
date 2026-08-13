<?php
$a=$_GET['v1'];
$b=$_GET['v2'];

function arithmetic($a,$b)
{
	echo "Addition of $a and $b is ".($a+$b)."<br>";
	echo "substraction of $a and $b is".($a-$b)."<br>";
	echo "multiplication of $a and $b is".($a*$b)."<br>";
	echo "division of $a and $b is".($a/$b)."<br>";
}
arithmetic($a,$b);

/*if(isset ($_GET['sbt1']))
{
 echo "Addition of $a and $b is" . ($a+$b);
}

elseif(isset ($_GET['sbt2']))
{
 echo "Substraction of $a and $b is" . ($a-$b);
}

elseif(isset ($_GET['sbt3']))
{
 echo "Multiplication of $a and $b is" . ($a*$b);
}

elseif(isset ($_GET['sbt4']))
{
 echo "Division of $a and $b is" . ($a/$b);
}*/

?>