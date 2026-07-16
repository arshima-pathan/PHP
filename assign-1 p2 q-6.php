<?php
$pamount=1000;
$flag=0;
$damount=0;
$pay=0;

if($pamount>=2000)
{
   $damount=$pamount*0.15;
}

elseif($pamount>=1000)
{
   $damount=$pamount*0.10;
}

elseif($pamount>=500)
{
   $damount=$pamount*0.05;
}

else
{
   echo"sorry..!!we can't gave you discount..purchase more..
}

$pay=$pamount-$damount;

echo"purchase amount : Rs.".$pamount."<br>";   
echo"discount amount : Rs.".$damount."<br>";
echo"payable amount : Rs.".$pay."<br>";
?>
 
 