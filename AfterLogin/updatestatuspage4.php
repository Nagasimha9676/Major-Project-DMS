<?php require 'LoginHeader.php'?>
<?php
$defno=$_GET["def"];
$query="SELECT * FROM `records`,`agency` WHERE `records`.`agency`=`agency`.`dname` and `records`.`rid`=".$defno;
$result = $con->query($query);
$rowcount = $result->num_rows;
if($rowcount==0)
	$agency="Not yet Allotted";
else
{
	$row = $result->fetch_assoc();
	$agency=$row["aname"];
}
$query="SELECT * FROM `records` WHERE `records`.`rid`=".$defno;
$result = $con->query($query);
$row = $result->fetch_assoc();
$loc=$row["location"];
$equip=$row["equipment"];
$status=$row["status"];
$def=$row["description"];
$class=$row["class"];
$permittee=$row["permittee"];
?>
<div class="card container-fluid">
  <div style="background-color: white;" class="container">
      <form method="POST" action="updatestatuspage5.php?def=<?php echo $defno;?>" class="row p-4">
      	<div class="col-sm-4 p-1">Deficiency Number:</div>
      	<div class="col-sm-8 p-1"><?php echo $defno;?></div>
      	<div class="col-sm-4 p-1">Current Maintenance Agency:</div>
      	<div class="col-sm-8 p-1"><?php echo $agency;?></div>
      	<div class="col-sm-4 p-1">New Agency:</div>
      	<div class="col-sm-8 p-1">
      		<select  class="col-sm-8" id="Agency" name="Agency">
              	<option value="<?php echo $agency;?>">Select Agency</option>
              	<?php
			  		$sql1 = "SELECT `aname` FROM `agency`";
	      			$result1 = mysqli_query($con, $sql1);
					while($row = mysqli_fetch_assoc($result1)){
    					echo '<option value="'.htmlspecialchars($row['aname']).'" '.$selected.'>'.htmlspecialchars($row['aname']). '</option>'; }
				?> 
            </select>
      	</div>
      	<button type="Submit"><i class="fa fa-hourglass-half"></i>Update Agency</button>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>