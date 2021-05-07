<?php
session_start();
require "../connect.php";
$icno=$_GET["id"];
$query="DELETE FROM `users` WHERE `icno`=".$icno;
$result=mysqli_query($con,$query);
if($result)
{
  echo '<script type="text/javascript"> 
    alert("Member Declined"); 
    window.location.href = "Approve member.php";
    </script>;';
}
else
{
  echo '<script type="text/javascript"> 
    alert("Member Couldn\'t be Declined"); 
    window.location.href = "Approve member.php";
    </script>;';
}
?>