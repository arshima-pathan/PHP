<?php
function vote($age)
{
    if($age>=18)
    {
       echo"eligible to vote";
    }
    else
    {
       echo"not eligible to vote";
    }   
}
vote(20);
?>