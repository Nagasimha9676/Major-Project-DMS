<?php
$query=mysqli_query($con,"SELECT `dname` FROM `users` WHERE `icno`=".$_SESSION["id"]);
$result=mysqli_fetch_row($query);
?>
<header style="color: white; background-color: #FF8C00;">
  <div class="container-fluid">
    <div class="row p-3">
     	<div class="col-xl-6 col-lg-5 col-sm-12">
        	<div class="Title"><h5 class="Title Up pt-1" style="font-weight: 800;">DEFICIENCY MANAGEMENT SYSTEM</h5></div>
      	</div>
      	<div class="col-xl-6 col-lg-57 col-sm-12">
      		<div class="row">
      			<form action="search.php" method="GET" class="col-xl-5 col-sm-6 p-1">
      				<input type="text" placeholder="Search" name="search" style="border: #FF4500; color: #FF4500;">
      				<button type="submit" class="search"><i class="fa fa-search" style="color: white;"></i></button>
      			</form>
      			<div class="col-xl-7 col-sm-6">
              <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle search" type="button" id="menu1" data-toggle="dropdown">
                  <?php echo $result[0];?>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation" class="menuiteml p-2"><a role="menuitem" tabindex="-1" href="../signout.php" class="p-2 menuitem"><i class="fa fa-sign-out"></i>&emsp;Sign Out</a></li>
                  <li role="presentation" class="menuiteml p-2"><a role="menuitem" tabindex="-1" href="change my password.php" class="p-2 menuitem"><i class="fa fa-key"></i>&emsp;Change Password</a></li>
                  <li role="presentation" class="menuiteml p-2"><a role="menuitem" tabindex="-1" href="Log Details.php" class="p-2 menuitem"><i class="fa fa-history"></i>&emsp;Log Details</a></li>
                  <li role="presentation" class="menuiteml p-2"><a role="menuitem" tabindex="-1" href="profile.php" class="p-2 menuitem"><i class="fa fa-user"></i>&emsp;My Profile</a></li>
                </ul>
              </div>
      			</div>
      		</div>
      	</div>
    </div>
  </div>
</header>