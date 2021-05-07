<?php
require "../connect.php";
if($_POST["privilege"]=="NORMAL PRIVILEGES")
{
	$sql="UPDATE `users` SET `memclass`='USER' WHERE `icno`=".$_GET["id"];
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege couldn\'t be Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
}
else if($_POST["privilege"]=="UPDATE PRIVILEGES")
{
	$sql="UPDATE `users` SET `memclass`='USERPLUS' WHERE `icno`=".$_GET["id"];
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege couldn\'t be Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
}
else if($_POST["privilege"]=="ADMINISTRATION PRIVILEGES")
{
	$sql="UPDATE `users` SET `memclass`='ADMIN' WHERE `icno`=".$_GET["id"];
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege couldn\'t be Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
}
else if($_POST["privilege"]=="SUPER ADMIN PRIVILEGES")
{
	$sql="UPDATE `users` SET `memclass`='ADMINPLUS' WHERE `icno`=".$_GET["id"];
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
	else
	{
		echo '<script type="text/javascript"> 
    		alert("Privilege couldn\'t be Updated"); 
    		window.location.href = "userprivileges.php";
    		</script>;';
	}
}
else
{
	echo '<script type="text/javascript"> 
    alert("Privilege not selected"); 
    window.location.href = "userprivileges.php";
    </script>;';
}
?>