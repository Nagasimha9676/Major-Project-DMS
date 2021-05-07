<?php require 'LoginHeader.php'?>
<?php
$query=mysqli_query($con,"SELECT `dname`,`memfrom` FROM `users` WHERE `icno`=".$_SESSION["id"]);
$result=mysqli_fetch_row($query);
?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2"> 
 			<div class="container row">
				<label class="col-sm-4 mt-1 mb-1 p-2">IC Number</label>       
				<div class="col-sm-8">:<?php echo $_SESSION["id"];?></div>
				<label class="col-sm-4 mt-1 mb-1 p-2">Name</label>       
        <div class="col-sm-8">:<?php echo $result[0];?></div>
        <label class="col-sm-4 mt-1 mb-1 p-2">Member From</label>       
        <div class="col-sm-8">:<?php echo $result[1];?></div>
        <label class="col-sm-4 mt-1 mb-1 p-2">Password Reset Phrase</label>       
        <div class="col-sm-8"><a href="Reset Phrase change.php"><button class="btn btn-primary" style="background-color: #4CAF50; border: white; color: white;">Manage Reset Phrase</button></a></div>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>