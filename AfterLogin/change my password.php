<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form method="post" action="changepwd.php">  
 			<div class="container row">
				<label class="col-sm-4 mt-1 mb-1 p-2">Current Password   </label>       
				<input class="col-sm-8 mt-1 mb-1 p-2" type="password" name="currpwd" id="currpwd"  placeholder="Enter Present Password"/>
				<label class="col-sm-4 mt-1 mb-1 p-2"> New Password </label>  
				<input class="col-sm-8 mt-1 mb-1 p-2" type="password" name="newpwd"  placeholder="Enter New Password,6-28 Characters length"/>
				<label class="col-sm-4 mt-1 mb-1 p-2"> Confirm New Password </label>        
				<input class="col-sm-8 mt-1 mb-1 p-2" type="password" name="renewpwd" placeholder="Re-enter the new password"/> 
				<h6 style="color:red" class="col-sm-12 pl-4">ALL FIELDS ARE MANDATORY TO CHANGE THE PASSWORD.</h6>
				<div class="row col-sm-12" align="center">
					<div class="col-sm-6"></div>   
					<div class="col-sm-6"><input type="submit" class="btn btn-success" value="Change Password"/></div>
				</div>
				<div class="col-sm-12" align="center">
					<p style="color:purple; font-family:verdana;"><font size="5"><b>Note:It is recommended to change</b> </font><a href="Reset Phrase change.php"><input type="button" class="btn btn-light border border-info text-info" value="Default password Reset phrase"/></a></p>
				</div>
		</form>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>