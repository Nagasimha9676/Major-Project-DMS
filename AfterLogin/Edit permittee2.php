<?php
session_start();
require "../connect.php";
$id=$_GET["id"];
if(isset($_POST["Yes"]))
{
  $query=mysqli_query($con,"UPDATE `permittee` SET `name`='".$_POST["name"]."',`agency`='".$_POST["Agency"]."' WHERE `id`=".$id);
  if($query)
  {
    echo '<script type="text/javascript"> 
    alert("Permittee edited"); 
    window.location.href = "Manage permittee.php";
    </script>;';
  }
  else
  {
    echo '<script type="text/javascript"> 
    alert("Permittee couldn\'t be edited"); 
    window.location.href = "Manage Permittee.php";
    </script>;';
  }
}
?>