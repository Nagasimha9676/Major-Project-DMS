<?php
session_start();
require "connect.php";
date_default_timezone_set("Asia/Kolkata");
$outdate=date("Y-m-d");
$outtime=date("H:i:s");
$user=$_SESSION["id"];
$indate=$_SESSION["indate"];
$intime=$_SESSION["intime"];
$s="UPDATE `userlog` SET `outd`='$outdate',`outt`='$outtime' WHERE `uid`='$user' and `sind`='$indate' and `sint`='$intime'";
$result = mysqli_query($con, $s);
session_unset();
session_destroy();
header("Location:index.php");
?>
