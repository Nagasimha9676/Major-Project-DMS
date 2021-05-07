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
      				<button type="button" class="btn btn-danger pt-1 search" data-toggle="modal" data-target="#exampleModal">Sign In</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #FF4500;">
                        <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" style="background-color: #fffff4;">
                        <div class="container-fluid row col-sm-12">
                            <div class="col-md-4 col-sm-12"><img src="Images/user.png" alt="User Image" width="150px"/></div>
                            <div class="col-md-8 col-sm-12" >
                              <form method="post" action="login.php">
                                <label class="col-sm-12">UserId:<input type="text" name="userid" id="userid"></label>
                                <label class="col-sm-12">Password:<input type="password" name="password" id="password"></label>
                                <div class="col-sm-12"><label><input type="checkbox" id="remember" name="remember" checked="checked" name="remember"> Remember me  </label></div>
                                <div class="col-sm-12">
                                  <button type="Submit" class="btn btn-danger col-md-3 col-sm-12 p-1" align="center" style="background-color: #FF4500; border: #FF4500;">Login</button>
                                  <a href="forgotpassword.php" class="col-md-9 col-sm-12" style="color: #ff4500;">Forgot Password?</a>
                                </div>
                              </form>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      				<span class="hovered"><?php echo date(" l, jS  F, Y");?></span>
      			</div>
      		</div>
      	</div>
    </div>
  </div>
</header>