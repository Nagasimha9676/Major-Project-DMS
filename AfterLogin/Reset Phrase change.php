<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form method="post" class="container row" action="resetphrase.php">
			<label class="col-sm-4 mt-1 mb-1 p-2">Current Password</label>       
			<input class="col-sm-8 mt-1 mb-1 p-2" type="password" name="pwd" placeholder="Enter Your Password"/>
			<label class="col-sm-4 mt-1 mb-1 p-2">Reset Phrase</label>  
			<input class="col-sm-8 mt-1 mb-1 p-2" type="password" name="phrase"  placeholder="Enter New Reset Phrase"/>
			<div class="col-sm-12 mt-1" align="center">
				<input type="submit" class="btn btn-success" value="Change Reset Phrase"/>
			</div>
		</form>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>