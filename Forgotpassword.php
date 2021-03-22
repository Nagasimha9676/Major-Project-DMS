<?php require 'DashboardHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form method="POST" action="resetpassword.php">
    		<label class="col-sm-4 mt-3">Employee ID:</label>
    		<input type="text" name="eid" id="eid" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">New Password:</label>
    		<input type="Password" name="pwd" id="pwd" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Confirm Password:</label>
    		<input type="Password" name="cpwd" id="cpwd" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Password Reset Phrase:</label>
    		<input type="password" name="prp" id="prp" class="col-sm-6 mt-3">
    		<div class="col-sm-12 mt-2" align="center"><button type="submit" id="submit" class="btn btn-primary" style="background-color: #FF4500; border-color: #ff4500;">Reset Password</button></div>
    	</form>
    </div>
</div>
<?php require 'DashboardFooter.php'?>
