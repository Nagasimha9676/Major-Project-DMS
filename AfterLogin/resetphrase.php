<?php
session_start();
require "../connect.php";
$currpwd=$_POST["pwd"];
$phrase=$_POST["phrase"];
$query=mysqli_query($con,"SELECT * FROM `users` WHERE `icno`=".$_SESSION["id"]);
$row = mysqli_fetch_assoc($query);
if(!(password_verify($currpwd,$row["pwd"])))
{
	echo '<script type="text/javascript"> 
    alert("Password Incorrect"); 
    window.location.href = "change my password.php";
    </script>;';
}
$query2="UPDATE `users` SET `resetph`='".$phrase."' WHERE `icno`=".$_SESSION["id"];
$result2=mysqli_query($con,$query2);
if($query2)
    echo '<script type="text/javascript"> 
    alert("Reset Phrase Updated Successfully"); 
    window.location.href = "LoginContent.php";
    </script>;';
else
    echo '<script type="text/javascript"> 
    alert("Reset Phrase Couldnot Be Updated"); 
    window.location.href = "change my password.php";
    </script>;';
?>