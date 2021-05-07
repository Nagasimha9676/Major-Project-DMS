<?php require 'LoginHeader.php'?>
<?php
if(isset($_POST["Agency"]) && isset($_POST["name"]))
{
  $sql="SELECT * FROM `permittee` WHERE `name`='".$_POST["name"]."'";
  $query=mysqli_num_rows(mysqli_query($con,$sql));
  if($query)
  {
    echo '<script type="text/javascript"> 
    alert("Permittee already exists"); 
    window.location.href = "Manage permittee.php";
    </script>;';
  }
  $sql="INSERT INTO `permittee`(`name`, `agency`, `pfrom`, `addedby`, `delby`, `status`) VALUES ('".$_POST["name"]."','".$_POST["Agency"]."','".date("Y-m-d")." ".date("H:i:s")."','".$_SESSION["name"]."','','active')";
  $query=mysqli_query($con,$sql);
  if($query)
  {
    echo '<script type="text/javascript"> 
    alert("Permittee added"); 
    window.location.href = "Manage permittee.php";
    </script>;';
  }
  else
  {
    echo '<script type="text/javascript"> 
    alert("Permittee couldn\'t be added"); 
    window.location.href = "Add Permittee.php";
    </script>;';
  }
}
?>
<div class="card container-fluid">
  <div style="background-color: white;" class="container">
      <form method="POST" action="Add Permittee.php" class="row p-4">
        <div class="col-sm-4 p-1">Agency:</div>
        <div class="col-sm-8 p-1">
          <select  class="col-sm-12" id="Agency" name="Agency">
                <option value="<?php echo $agency;?>">Select Agency</option>
                <?php
                   $sql1 = "SELECT `aname` FROM `agency`";
                    $result1 = mysqli_query($con, $sql1);
                     while($row = mysqli_fetch_assoc($result1)){
                     echo '<option value="'.htmlspecialchars($row['aname']).'" '.$selected.'>'.htmlspecialchars($row['aname']). '</option>'; }
                ?> 
            </select>
        </div>
      	<div class="col-sm-4 p-1">Permittee Name:</div>
      	<div class="col-sm-8 p-1"><input type="text" name="name" class="col-sm-12"></div>      	
      	<div class="col-sm-12 p-1" align="center"><button type="Submit" class="btn btn-primary">Add Permittee</button></div>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>