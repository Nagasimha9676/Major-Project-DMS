<?php require 'LoginHeader.php'?>
<?php
$defno=$_POST["defno"];
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
      <form method="POST" action="updatestatuspage3.php?id=<?php echo $defno;?>" class="row p-4">
      	<div class="col-sm-4 p-1">Deficiency Number:</div>
      	<div class="col-sm-8 p-1"><?php echo $defno;?></div>
      	<div class="col-sm-4 p-1">Maintenance Agency:</div>
      	<div class="col-sm-8 p-1"><?php echo $agency;?>&emsp;<a href="updatestatuspage4.php?def=<?php echo $defno;?>"><div class="btn btn-primary"><i class="fa fa-external-link">&nbsp;&nbsp;</i>
      	<?php
      	if($agency=="Not yet Allotted")
      		echo "Allot Agency";
      	else
      		echo "Divert Agency";
      	?></div></a></div>
      	<div class="col-sm-4 p-1">Location & Equipment:</div>
      	<div class="col-sm-8 p-1"><?php echo $loc;?>&emsp;<?php echo $equip;?></div>
      	<div class="col-sm-4 p-1">Current Status:</div>
      	<div class="col-sm-8 p-1"><?php echo $status;?></div>
      	<div class="col-sm-4 p-1">Deficiency:</div>
      	<div class="col-sm-8 p-1"><?php echo $def;?></div>
      	<div class="col-sm-4 p-1">Update Status To:</div>
      	<div class="col-sm-8 p-1">
      	<select style="cursor:pointer;" class="col-sm-8" name="status" id="status">
           <option value="">Select Current Status &nbsp;&nbsp;</option>
           <?php $result = mysqli_query($con, "SELECT status FROM records WHERE rid = '$defno'");
			     $array = mysqli_fetch_assoc($result);
			     $curstat = $array['status'];
if ($curstat == "DR" || $curstat == "DR REISSUED" ){
			$sql = "SELECT stat1 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat1']) { $selected = 'selected';     }
	        if ($row['stat1'] != ""){ echo '<option value="'.htmlspecialchars($row['stat1']).'" '.$selected.'>'.htmlspecialchars($row['stat1']). '</option>'; } }
} elseif ($curstat == "DR SURRENDERED") { 
			$sql = "SELECT stat25 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat25']) { $selected = 'selected';     }
	        if ($row['stat25'] != ""){ echo '<option value="'.htmlspecialchars($row['stat25']).'" '.$selected.'>'.htmlspecialchars($row['stat25']). '</option>'; } }
} elseif ($curstat == "APPROVAL REQUIRED") { 
			$sql = "SELECT stat2 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat2']) { $selected = 'selected';     }
	        if ($row['stat2'] != ""){ echo '<option value="'.htmlspecialchars($row['stat2']).'" '.$selected.'>'.htmlspecialchars($row['stat2']). '</option>'; } }
} elseif ($curstat == "ISOLATION OTO PREPARATION") { 
			$sql = "SELECT stat3 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat3']) { $selected = 'selected';     }
	        if ($row['stat3'] != ""){ echo '<option value="'.htmlspecialchars($row['stat3']).'" '.$selected.'>'.htmlspecialchars($row['stat3']). '</option>'; } }
} elseif ( $cotostat == "Yes" && $curstat == "SWP PREPARATION") { 
				  $sql = "SELECT stat26 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat26']) { $selected = 'selected';     }
	              if ($row['stat26'] != ""){ echo '<option value="'.htmlspecialchars($row['stat26']).'" '.$selected.'>'.htmlspecialchars($row['stat26']). '</option>'; } }			
} elseif ($curstat == "SWP PREPARATION") { 
				  $sql = "SELECT stat6 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat6']) { $selected = 'selected';     }
	              if ($row['stat6'] != ""){ echo '<option value="'.htmlspecialchars($row['stat6']).'" '.$selected.'>'.htmlspecialchars($row['stat6']). '</option>'; } }
} elseif ($curstat == "SWP PART I PREPARED") { 
                $sql = "SELECT class FROM records WHERE rid = '$defno'";
	            $result = mysqli_query($con, $sql);
                $array = mysqli_fetch_assoc($result);
			    $drclass = $array['class'];
            if ($drclass == "CS ENTRY CLASS I"){
				  $sql = "SELECT stat7 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat7']) { $selected = 'selected';     }
	              if ($row['stat7'] != ""){ echo '<option value="'.htmlspecialchars($row['stat7']).'" '.$selected.'>'.htmlspecialchars($row['stat7']). '</option>'; } }
			} elseif ($drclass == "CLASS I SWP"){
				  $sql = "SELECT stat8 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat8']) { $selected = 'selected';     }
	              if ($row['stat8'] != ""){ echo '<option value="'.htmlspecialchars($row['stat8']).'" '.$selected.'>'.htmlspecialchars($row['stat8']). '</option>'; } }
			} else {
				  $sql = "SELECT stat9 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat9']) { $selected = 'selected';     }
	              if ($row['stat9'] != ""){ echo '<option value="'.htmlspecialchars($row['stat9']).'" '.$selected.'>'.htmlspecialchars($row['stat9']). '</option>'; } }
			     }
} elseif ($curstat == "SAFETY CLEARED") { 
                $sql = "SELECT class FROM records WHERE rid = '$defno'";
	            $result = mysqli_query($con, $sql);
                $array = mysqli_fetch_assoc($result);
			    $drclass = $array['class'];
            if ($drclass == "CS ENTRY CLASS I"){
				  $sql = "SELECT stat10 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat10']) { $selected = 'selected';     }
	              if ($row['stat10'] != ""){ echo '<option value="'.htmlspecialchars($row['stat10']).'" '.$selected.'>'.htmlspecialchars($row['stat10']). '</option>'; } }
			} else {
				  $sql = "SELECT stat11 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	              $result = mysqli_query($con, $sql);
	              while($row = mysqli_fetch_assoc($result)){
                  $selected = ''; if ($status == $row['stat11']) { $selected = 'selected';     }
	              if ($row['stat11'] != ""){ echo '<option value="'.htmlspecialchars($row['stat11']).'" '.$selected.'>'.htmlspecialchars($row['stat11']). '</option>'; } }
			     }			
} elseif ($curstat == "CS ENTRY CLEARED") { 
			$sql = "SELECT stat11 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat11']) { $selected = 'selected';     }
	        if ($row['stat11'] != ""){ echo '<option value="'.htmlspecialchars($row['stat11']).'" '.$selected.'>'.htmlspecialchars($row['stat11']). '</option>'; } }
} elseif ($curstat == "APPROVED BY Dy PM(U)/PM(U)") { 
			$sql = "SELECT stat9 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat9']) { $selected = 'selected';     }
	        if ($row['stat9'] != ""){ echo '<option value="'.htmlspecialchars($row['stat9']).'" '.$selected.'>'.htmlspecialchars($row['stat9']). '</option>'; } }
} elseif ($curstat == "OPPORTUNITY SHUTDOWN") { 
			$sql = "SELECT stat12 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat12']) { $selected = 'selected';     }
	        if ($row['stat12'] != ""){ echo '<option value="'.htmlspecialchars($row['stat12']).'" '.$selected.'>'.htmlspecialchars($row['stat12']). '</option>'; } }
} elseif ($curstat == "UNIT SHUTDOWN") { 
			$sql = "SELECT stat13 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat13']) { $selected = 'selected';     }
	        if ($row['stat13'] != ""){ echo '<option value="'.htmlspecialchars($row['stat13']).'" '.$selected.'>'.htmlspecialchars($row['stat13']). '</option>'; } }
} elseif ($curstat == "STATION SHUTDOWN") { 
			$sql = "SELECT stat14 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat14']) { $selected = 'selected';     }
	        if ($row['stat14'] != ""){ echo '<option value="'.htmlspecialchars($row['stat14']).'" '.$selected.'>'.htmlspecialchars($row['stat14']). '</option>'; } }
} elseif ($curstat == "MATERIAL CONSTRAINT") { 
			$sql = "SELECT stat15 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat15']) { $selected = 'selected';     }
	        if ($row['stat15'] != ""){ echo '<option value="'.htmlspecialchars($row['stat15']).'" '.$selected.'>'.htmlspecialchars($row['stat15']). '</option>'; } }
} elseif ($curstat == "MANPOWER CONSTRAINT") { 
			$sql = "SELECT stat16 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat16']) { $selected = 'selected';     }
	        if ($row['stat16'] != ""){ echo '<option value="'.htmlspecialchars($row['stat16']).'" '.$selected.'>'.htmlspecialchars($row['stat16']). '</option>'; } }
} elseif ($curstat == "DR SUSPENDED") { 
			$sql = "SELECT stat17 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat17']) { $selected = 'selected';     }
	        if ($row['stat17'] != ""){ echo '<option value="'.htmlspecialchars($row['stat17']).'" '.$selected.'>'.htmlspecialchars($row['stat17']). '</option>'; } }
} elseif ($curstat == "SWP ISSUED") { 
			$sql = "SELECT stat18 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat18']) { $selected = 'selected';     }
	        if ($row['stat18'] != ""){ echo '<option value="'.htmlspecialchars($row['stat18']).'" '.$selected.'>'.htmlspecialchars($row['stat18']). '</option>'; } }
} elseif ($curstat == "REQUESTED RENEWAL") { 
			$sql = "SELECT stat19 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat19']) { $selected = 'selected';     }
	        if ($row['stat19'] != ""){ echo '<option value="'.htmlspecialchars($row['stat19']).'" '.$selected.'>'.htmlspecialchars($row['stat19']). '</option>'; } }
} elseif ($curstat == "ISOLATIONS CHECKED") { 
			$sql = "SELECT stat20 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat20']) { $selected = 'selected';     }
	        if ($row['stat20'] != ""){ echo '<option value="'.htmlspecialchars($row['stat20']).'" '.$selected.'>'.htmlspecialchars($row['stat20']). '</option>'; } }
} elseif ($curstat == "SWP RENEWED" || $curstat == "SWP REISSUED" ) { 
			$sql = "SELECT stat21 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat21']) { $selected = 'selected';     }
	        if ($row['stat21'] != ""){ echo '<option value="'.htmlspecialchars($row['stat21']).'" '.$selected.'>'.htmlspecialchars($row['stat21']). '</option>'; } }
} elseif ($curstat == "SWP SURRENDERED") { 
			$sql = "SELECT stat22 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat22']) { $selected = 'selected';     }
	        if ($row['stat22'] != ""){ echo '<option value="'.htmlspecialchars($row['stat22']).'" '.$selected.'>'.htmlspecialchars($row['stat22']). '</option>'; } }
} elseif ($curstat == "TRIAL RUN or CHECKING") { 
			$sql = "SELECT stat23 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat23']) { $selected = 'selected';     }
	        if ($row['stat23'] != ""){ echo '<option value="'.htmlspecialchars($row['stat23']).'" '.$selected.'>'.htmlspecialchars($row['stat23']). '</option>'; } }
} elseif ($curstat == "SWP SUSPENDED") { 
			$sql = "SELECT stat24 FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($status == $row['stat24']) { $selected = 'selected';     }
	        if ($row['stat24'] != ""){ echo '<option value="'.htmlspecialchars($row['stat24']).'" '.$selected.'>'.htmlspecialchars($row['stat24']). '</option>'; } }		 
} else { $sql = "SELECT status FROM status WHERE sstatus = 'active' ORDER BY id ASC";
	        $result = mysqli_query($con, $sql);
	        while($row = mysqli_fetch_assoc($result)){
            $selected = ''; if ($curstat == $row['status']) { $selected = 'selected';     }
	        if ($row['status'] != ""){ echo '<option value="'.htmlspecialchars($row['status']).'" '.$selected.'>'.htmlspecialchars($row['status']). '</option>'; } }			  
		} ?> </select>
      	</div>
      	<div class="col-sm-4 p-1" >Class of SWP:</div>
      	<div class="col-sm-8 p-1">
      		<select id="Status" class="col-sm-8" name="class" <?php if( $status != "SWP PART I PREPARED" && $status != "SAFETY CLEARED" && $status != "SWP ISSUED" && $status != "SWP REISSUED" ) { echo "disabled=\"disabled\""; }  ?>>
              <option value="class">Select Class of SWP</option>
              <?php  
             	$sql = "SELECT class FROM swpclass WHERE status = 'active' ORDER BY id ASC";
	         	$result = mysqli_query($con, $sql);
	         	while($row = mysqli_fetch_assoc($result)){
            		$selected = ''; 
            		if ($class == $row['class']) 
            			$selected = 'selected';
          			echo '<option value="'.htmlspecialchars($row['class']).'" '.$selected.'>'.htmlspecialchars($row['class']). '</option>';
          		}
	      ?>
            </select>
      	</div>
      	<div class="col-sm-4 p-1">Permittee Name:</div>
      	<div class="col-sm-8 p-1">
      		<select  class="col-sm-8" id="Status" name="permittee" <?php if( $status != "SWP PART I PREPARED" && $status != "SAFETY CLEARED" && $status != "SWP ISSUED" && $status != "SWP REISSUED" ) { echo "disabled=\"disabled\""; } ?>>
              	<option value="permittee">Select Permittee</option>
              	<?php
			  		$sql1 = "SELECT name FROM permittee WHERE status = 'active' AND agency = '$agency' ORDER BY name ASC";
	      			$result1 = mysqli_query($con, $sql1);
					while($row = mysqli_fetch_assoc($result1)){
    					$selected = '';
    					if ($permittee == $row['name'])
    						$selected = 'selected';
    					echo '<option value="'.htmlspecialchars($row['name']).'" '.$selected.'>'.htmlspecialchars($row['name']). '</option>'; }
				?> 
            </select>
      	</div>
      	<a href="updatestatuspage1.php" class="col-sm-6"><div class="btn"><i class="fa fa-reply">&nbsp;&nbsp;</i>Revert Back</div></a>
      	<button type="Submit"><i class="fa fa-hourglass-half"></i>Update Status</button>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>