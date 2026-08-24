<?php
$con=mysqli_connect('localhost','root','','d1');
if(!$con)
{
  echo "connection not done <br>".mysqli_connect_error();
}
else
{
	echo"connection done..<br>";
}
$sql="insert into class
      values(01,'Arshima',25,'php')";
	        
mysqli_query($con,$sql);
echo"database successfully created..";

?>
  