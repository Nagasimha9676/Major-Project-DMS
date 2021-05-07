<?php
session_start();
require '../connect.php';
$id=$_GET["id"];
if(isset($_POST["status"]) && $_POST["status"]!="")
{
	$status=$_POST["status"];
	if(str_contains($status, 'CLEARED'))
	{
		$mysql="UPDATE `records` SET `cldate`='".date('Y-m-d')."' WHERE `rid`=".$id;
		$result=mysqli_query($con,$mysql);
	}
	$mysql="UPDATE `records` SET `status`='".$status."' WHERE `rid`=".$id;
	$result=mysqli_query($con,$mysql);
	if($result)
	{
		echo '<script type="text/javascript"> 
    		alert("Status Updated"); 
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Status Couldnot be Updated"); 
    		window.location.href = "updatestatuspage1.php";
    		</script>;';
	}
}
else
{
	$status="";
}
if(isset($_POST["class"]))
{
	$class=$_POST["class"];
	$mysql="UPDATE `records` SET `class`='".$class."' WHERE `rid`=".$id;
	$result=mysqli_query($con,$mysql);
	if($result)
	{
		echo '<script type="text/javascript"> 
    		alert("Class Updated"); 
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Class Couldnot be Updated"); 
    		window.location.href = "updatestatuspage1.php";
    		</script>;';
	}
}
else
{
	$class="";
}
if(isset($_POST["permittee"]))
{
	$permittee=$_POST["permittee"];
	$mysql="UPDATE `records` SET `permittee`='".$permittee."' WHERE `rid`=".$id;
	$result=mysqli_query($con,$mysql);
	if($result)
	{
		echo '<script type="text/javascript"> 
    		alert("Permittee Updated"); 
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Permittee Couldnot be Updated"); 
    		window.location.href = "updatestatuspage1.php";
    		</script>;';
	}
}
else
{
	$permittee="";
}
if(!($status=="" && $class=="" && $permittee==""))
{
	$sql=mysqli_query($con,"SELECT `dname` FROM `users` WHERE `icno`=".$_SESSION["id"]);
	$row=mysqli_fetch_assoc($sql);
	$sql="INSERT INTO `editstat`(`rid`, `status`, `class`, `permittee`, `editdate`, `edittime`, `editedby`, `remarks`) VALUES (".$id.",'".$status."','".$class."','".$permittee."','".date("Y-m-d")."','".date("H:i:s")."','".$row["dname"]."','')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo '<script type="text/javascript"> 
    		alert("Updated"); 
    		window.location.href = "updatestatuspage1.php";
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Couldnot be Updated"); 
    		window.location.href = "updatestatuspage1.php";
    		</script>;';
	}
	echo $sql;
}
?>