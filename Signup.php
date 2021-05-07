<?php require 'DashboardHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form method="POST" action="memreg.php">
    		<label class="col-sm-4 mt-3">Employee ID:</label>
    		<input type="text" name="eid" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Password:</label>
    		<input type="Password" name="pwd" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Confirm Password:</label>
    		<input type="Password" name="cpwd" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Name:</label>
    		<input type="test" name="name" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Date Of Birth:</label>
    		<input type="date" max="<?php echo date("Y-m-d",strtotime("-20 years"))?>" name="dob" class="col-sm-6 mt-3">
    		<div class="col-sm-12" align="center"><button type="submit" class="btn btn-primary" style="background-color: #FF4500; border-color: #ff4500;">Sign Up</button></div>
    	</form>
    </div>
</div>
<?php require 'DashboardFooter.php'?>