<?php
require "connect.php";
$user="5".$_POST["userid"];
$pwd=$_POST["password"];
if($pwd=="" || $user=="5")
	echo '<script type="text/javascript">alert("User or Password Unentered");window.location.href = "DashboardContent.php";</script>;';
if(!mysqli_query($con,"SELECT * FROM `users` WHERE `icno`=".$user." AND `pwd`='".$pwd."'"))
{
    echo '<script type="text/javascript"> 
    alert("Wrong Credentials1"); 
    window.location.href = "DashboardContent.php";
    </script>;';
}
$query=mysqli_query($con,"SELECT * FROM `users` WHERE `icno`=".$user." AND `pwd`='".$pwd."'");
$rowcount=mysqli_num_rows($query);
if($rowcount!=1)
{

	echo '<script type="text/javascript"> 
    alert("Wrong Credentials"); 
    window.location.href = "DashboardContent.php";
    </script>;';
}
else
{	
	session_start();
    if(!empty($_POST["remember"])) {
        setcookie ("id",$_POST["userid"],time()+ 3600);
        setcookie ("pwd",$_POST["password"],time()+ 3600);
        echo "Cookies Set Successfuly";
    } else {
        setcookie("id","");
        setcookie("pwd","");
        echo "Cookies Not Set";
    }
	$_SESSION["id"]=$user;
    date_default_timezone_set("Asia/Kolkata");
    $indate=date("Y-m-d");
    $intime=date("H:i:s");
    $s="INSERT INTO `userlog`(`uid`, `sind`, `sint`, `outd`, `outt`) VALUES ('$user','$indate','$intime','0000-00-00','00:00:00')";
    $_SESSION["indate"]=$indate;
    $_SESSION["intime"]=$intime;
    $result = mysqli_query($con, $s);
	header("Location:AfterLogin/LoginContent.php");
}
exit();
?>