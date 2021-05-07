<?php
require "connect.php";
$eid=$_POST["eid"];
if($eid>50000)
    $eid=$eid-50000;
$query=mysqli_query($con,"SELECT resetph FROM `users` WHERE `icno`=5".$eid);
$Phrase=mysqli_fetch_row($query);
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];
$prp=$_POST["prp"];
if($prp!=$Phrase[0])
{
    echo '<script type="text/javascript"> 
    alert("Phrase Incorrect "'.$eid.'); 
    window.location.href = "Forgotpassword.php";
    </script>;';
}
if($pwd!=$cpwd)
{
    echo '<script type="text/javascript"> 
    alert("Passwords donot match"); 
    window.location.href = "Forgotpassword.php";
    </script>;';
}
$pwd=password_hash($pwd, PASSWORD_DEFAULT);
$query2=mysqli_query($con,"UPDATE `users` SET `pwd`='".$pwd."' WHERE `icno`=5".$eid);
if($query2)
    echo '<script type="text/javascript"> 
    alert("Password Updated Successfully"); 
    window.location.href = "DashboardContent.php";
    </script>;';
else
    echo '<script type="text/javascript"> 
    alert("Password Couldnot Be Updated"); 
    window.location.href = "Forgotpassword.php";
    </script>;';
?>