<?php
session_start();
require "../connect.php";
$currpwd=$_POST["currpwd"];
$newpwd=$_POST["newpwd"];
$renewpwd=$_POST["renewpwd"];
$query=mysqli_query($con,"SELECT `pwd` FROM `users` WHERE `icno`=".$_SESSION["id"]);
$row = mysqli_fetch_assoc($query);
if(!password_verify($currpwd,$row["pwd"]))
{
	echo '<script type="text/javascript"> 
    alert("Current Password Incorrect"); 
    window.location.href = "change my password.php";
    </script>;';
}
else if($currpwd==$newpwd)
{
	echo '<script type="text/javascript"> 
    alert("New Password is same as Current Password"); 
    window.location.href = "change my password.php";
    </script>;';
}
else if($renewpwd!=$newpwd)
{
	echo '<script type="text/javascript"> 
    alert("Passwords donot match"); 
    window.location.href = "change my password.php";
    </script>;';
}
$newpwd=password_hash($newpwd, PASSWORD_DEFAULT);
$query2="UPDATE `users` SET `pwd`='".$newpwd."' WHERE `icno`=".$_SESSION["id"];
$result2=mysqli_query($con,$query2);
if($query2)
    echo '<script type="text/javascript"> 
    alert("Password Updated Successfully"); 
    window.location.href = "LoginContent.php";
    </script>;';
else
    echo '<script type="text/javascript"> 
    alert("Password Couldnot Be Updated"); 
    window.location.href = "change my password.php";
    </script>;';
?>