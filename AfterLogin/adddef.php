<?php
require "../connect.php";
session_start();
date_default_timezone_set("Asia/Kolkata");
$id=$_SESSION["id"];
$insdate=date("Y-m-d");
$instime=date("H:i:s");
$Location=$_POST["Location"];
$EquipmentName=$_POST["EquipmentName"];
$MaintenanceAgency=$_POST["MaintenanceAgency"];
$entdef=$_POST["entdef"];
$dredited="no";
$cotostat="No";
$state="DR";
$class="";
$swpdate="0000-00-00";
$swptime="00:00:00";
$query="SELECT * FROM `users` WHERE `icno`=".$id;
$result = $con->query($query);
$row = $result->fetch_assoc();
$insby=$row["dname"];
$cotodt="";
$permittee="";
$cotoby="";
$stadate="0000-00-00";
$statime="00:00:00";
$remarks=$_POST["entmain"];
$cldate="0000-00-00";
$cltime="00:00:00";
$cotono="1111";
$isolated="no";
$rendate="0000-00-00";
$rentime="00:00:00";

$s="INSERT INTO `records`(`disid`, `insdate`, `instime`, `location`, `equipment`, `agency`, `description`, `dredited`, `cotostat`, `status`, `class`, `swpdate`, `swptime`, `insby`, `cotodt`, `permittee`, `cotoby`, `stadate`, `statime`, `remarks`, `cldate`, `cltime`, `cotono`, `isolated`, `rendate`, `rentime`) VALUES ('$id','$insdate','$instime','$Location','$EquipmentName','$MaintenanceAgency','$entdef','$dredited','$cotostat','$state','$class','$swpdate','$swptime','$insby','$cotodt','$permittee','$cotoby','$stadate','$statime','$remarks','$cldate','$cltime','$cotono','$isolated','$rendate','rentime')";
//echo $s;/*
$result = mysqli_query($con, $s);
if($result)
{
  echo '<script type="text/javascript"> 
    alert("New Deficiency Added"); 
    window.location.href = "LoginContent.php";
    </script>;';
}
else
{
  echo '<script type="text/javascript"> 
    alert("Deficiency couldn\'t be added successfully"); 
    window.location.href = "add new deficiency details.php";
    </script>;';
}
?>