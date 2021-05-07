<?php
require "connect.php";
$eid="5".$_POST["eid"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$query=mysqli_query($con,"SELECT * FROM `users` WHERE `icno`=".$eid);
$row_count=mysqli_num_rows($query);
if($row_count)
{
    echo '<script type="text/javascript"> 
    alert("User with the Employee ID already exists"); 
    window.location.href = "Signup.php";
    </script>;';
}
if($pwd!=$cpwd)
{
    echo '<script type="text/javascript"> 
    alert("Passwords Donot Match"); 
    window.location.href = "Signup.php";
    </script>;';
}
$pwd=password_hash($pwd, PASSWORD_DEFAULT);
$sql="INSERT INTO `users`(`icno`, `pwd`, `respwd`, `dname`, `ustatus`, `memclass`, `memfrom`, `resreqdate`, `resappdate`, `resappby`, `appdate`, `apptime`, `appby`, `resetph`, `pcip`, `dob`) VALUES (".$eid.",'".$pwd."','NO','".$name."','TO BE APPROVED','USER','".date("Y-m-d")." ".date("H:i:s")."','".date("Y-m-d")." ".date("H:i:s")."','','','','','','all is well','','".$dob."')";
$query=mysqli_query($con,$sql);
if($query)
    echo '<script type="text/javascript"> 
    alert("User needs to be approved"); 
    window.location.href = "DashboardContent.php";
    </script>;';
else
    echo '<script type="text/javascript"> 
    alert("User coudldnot be added"); 
    window.location.href = "Forgotpassword.php";
    </script>;';
?>