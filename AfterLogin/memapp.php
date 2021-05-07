<?php
session_start();
require "../connect.php";
date_default_timezone_set('Asia/Kolkata');
$icno=$_GET["id"];
$query="UPDATE `users` SET `ustatus`='active',`resappdate`='".date("Y-m-d")." ".date("H:i:s")."',`resappby`='".$_SESSION["name"]."',`appdate`='".date("Y-m-d")."',`apptime`='".date("H:i:s")."',`appby`='".$_SESSION["name"]."' WHERE `icno`=".$icno;
$result=mysqli_query($con,$query);
if($result)
{
  echo '<script type="text/javascript"> 
    alert("Member Approved"); 
    window.location.href = "Approve member.php";
    </script>;';
}
else
{
  echo '<script type="text/javascript"> 
    alert("Member Couldn\'t be Approved"); 
    window.location.href = "Approve member.php";
    </script>;';
}
?>