<?php
$con=mysqli_connect("localhost","root","","E1");
if(!$con)
{
   echo "not connected".mysqli_connect_error();
}
else
{
   echo"connected successfully!!";
}

//insert
$sql="insert into student
      values(1,'Arshima','Rajkot')";
if(mysqli_query($con,$sql))
{
    echo"<br>Record inserted";
}
else
{
    echo "<br>Record not inserted".mysqli_error($con);
}

//update
$sql="UPDATE student set city='Junagadh' where rollno=1";
if(mysqli_query($con,$sql))
{
    echo"<br>Record updated";
}
else
{
    echo "<br>Record not updated:".mysqli_error($con);
}

//delete
$sql="delete From student where rollno=1";
if(mysqli_query($con,$sql))
{
    echo"<br>Record deleted";
}
else
{
    echo "<br>Record not deleted:".mysqli_error($con);
}

?>