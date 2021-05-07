<?php require 'LoginHeader.php'?>
<?php
if(isset($_POST["location"]) && isset($_POST["equipment"]))
{
	$sql=mysqli_query($con,"SELECT * FROM `location` WHERE `lname`='".$_POST["location"]."'");
	$row=mysqli_fetch_assoc($sql);
	$sql=mysqli_query($con,"SELECT * FROM `equipment` WHERE `lid`=".$row["lid"]." AND `ename`='".$_POST["equipment"]."'");
	$rowcnt=mysqli_num_rows($sql);
	if($rowcnt)
	{
		echo '<script type="text/javascript"> 
    		alert("Equipment already available"); 
    		window.location.href = "addequipment.php";
    		</script>;';
	}
	else{
		$sql=mysqli_query($con,"INSERT INTO `equipment`(`lid`, `ename`, `estatus`) VALUES (".$row["lid"].",'".$_POST["equipment"]."','active')");
		if($sql)
		{
			echo '<script type="text/javascript"> 
    			alert("Equipment added"); 
    			</script>';
		}
		else
		{
			echo '<script type="text/javascript"> 
    			alert("Equipment couldn\'t be added"); 
    			</script>';
		}
	}
}
?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form method="post" class="container row" action="addequipment.php">
			<label class="col-sm-4 mt-1 mb-1 p-2">Location / System:</label>       
			<select class="col-sm-8 mt-1 mb-1 p-2" name="location">
				<option name='location' value="1">Select Location/System</option>
            	<?php
                	$query="SELECT * FROM `location`";
                	if ($result = $con->query($query)) 
                	{
                    	while ($row = $result->fetch_assoc()) 
                   	 	{
                        	echo "<option name='location' value='" . $row['lname'] ."'>" . $row['lname'] ."</option>";
                    	}
                    	$result->free();
                	}
            	?>
			</select>
			<label class="col-sm-4 mt-1 mb-1 p-2">Equipment Name:</label>  
			<input class="col-sm-8 mt-1 mb-1 p-2" type="text" name="equipment"  placeholder="Enter Equipment"/>
			<div class="col-sm-12 mt-1" align="center">
				<input type="submit" class="btn btn-success" value="Add The Equipment"/>
			</div>
		</form>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>