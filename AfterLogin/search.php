<?php require 'LoginHeader.php'?>
<?php
$defno=$_GET["search"];
$query="SELECT * FROM `records`,`agency` WHERE `records`.`agency`=`agency`.`dname` and `records`.`rid`=".$defno;
$result = $con->query($query);
$rowcount = $result->num_rows;
if($rowcount==0)
    $agency="Not yet allotted";
else
{
    $row = $result->fetch_assoc();
    $agency=$row["aname"];
}
$query="SELECT * FROM `records` WHERE `records`.`rid`=".$defno;
$result = $con->query($query);
$row = $result->fetch_assoc();
?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<div class="col-sm-4">Record No</div>
        <div class="col-sm-6">:<?php echo $row["rid"];?></div>
        <div class="col-sm-4">Maintenance Agency</div>
        <div class="col-sm-6">:<?php echo $agency;?></div>
        <div class="col-sm-4">Current Status</div>
        <div class="col-sm-6">:<?php echo $row["status"];?></div>
        <div class="col-sm-4">Description Of Deficiency</div>
        <div class="col-sm-6">:<?php echo $row["description"];?></div>
        <div class="col-sm-4">Location and Equipment</div>
        <div class="col-sm-6">:<?php echo $row["location"]." ".$row["equipment"];?></div>
        <div class="col-sm-4">Permittee</div>
        <div class="col-sm-6">:<?php if($row["permittee"]!="") echo $row["permittee"]; else echo "Not yet alloted";?></div>
        <div class="col-sm-4">Class</div>
        <div class="col-sm-6">:<?php if($row["class"]!="") echo $row["class"]; else echo "Not yet alloted";?></div>
        <div class="col-sm-4">Initiated By</div>
        <div class="col-sm-6">:<?php echo $row["insby"];?></div>
        <div class="col-sm-4">Initiated Date and Time</div>
        <div class="col-sm-6">:<?php echo $row["insdate"]." ".$row["instime"];?></div>
        <div class="col-sm-4">Cleared Date and Time</div>
        <div class="col-sm-6">:<?php if($row["cldate"]!="0000-00-00") echo $row["cldate"]; else echo "NA"?></div>
    </div>
</div>
<?php require 'LoginFooter.php'?>
