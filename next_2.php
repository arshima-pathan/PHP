<?php
session_start();
echo "welcome to our site:".$_SESSION['user']."<br>";
echo "<a href='logout.php'>logout</a>";
?>