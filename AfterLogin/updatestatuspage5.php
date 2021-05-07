<?php
session_start();
require '../connect.php';
$query="SELECT `dname` FROM `agency` WHERE `aname`='".$_POST["Agency"]."'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$defno=$_GET["def"];
$query="UPDATE `records` SET `agency`='".$row["dname"]."' WHERE `rid`=".$defno;
echo $query;
$result = $con->query($query);
if($result)
{
  echo '<script type="text/javascript"> 
        alert("Agency updated"); 
        window.location.href = "updatestatuspage1.php";
        </script>;';
}
else
{
  echo '<script type="text/javascript"> 
        alert("Agency couldnot be updated"); 
        window.location.href = "updatestatuspage1.php";
        </script>;';
}
?>