<?php
require "../connect.php";
$sql="UPDATE `users` SET `ustatus`='inactive' WHERE `icno`=".$_GET["id"];
$query=mysqli_query($con,$sql);
if($query)
{
	echo '<script type="text/javascript"> 
   		alert("Suspended"); 
   		window.location.href = "userprivileges.php";
   		</script>;';
}
else
{
	echo '<script type="text/javascript"> 
   		alert("Couldn\'t Suspend"); 
   		window.location.href = "userprivileges.php";
   		</script>;';
}
?>