<?php
require "../connect.php";
$sql="UPDATE `users` SET `ustatus`='active' WHERE `icno`=".$_GET["id"];
$query=mysqli_query($con,$sql);
if($query)
{
	echo '<script type="text/javascript"> 
   		alert("User Activated"); 
   		window.location.href = "userprivileges.php";
   		</script>;';
}
else
{
	echo '<script type="text/javascript"> 
   		alert("User couldn\'t be activated"); 
   		window.location.href = "userprivileges.php";
   		</script>;';
}
?>