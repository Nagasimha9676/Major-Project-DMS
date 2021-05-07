<?php require 'LoginHeader.php'?>
<?php
$id=$_GET["id"];
$query=mysqli_query($con,"SELECT * FROM `permittee` WHERE `id`=".$id);
$row=mysqli_fetch_assoc($query);
if(isset($_POST["Yes"]))
{
  $query=mysqli_query($con,"UPDATE `permittee` SET `delby`='".$_SESSION["name"]."',`status`='inactive' WHERE `id`=".$id);
  if($query)
  {
    echo '<script type="text/javascript"> 
    alert("Permittee deleted"); 
    window.location.href = "Manage permittee.php";
    </script>;';
  }
  else
  {
    echo '<script type="text/javascript"> 
    alert("Permittee couldn\'t be deleted"); 
    window.location.href = "Manage Permittee.php";
    </script>;';
  }
}
?>
<div class="card container-fluid">
  <div style="background-color: white;" class="container">
      <form method="POST" action="delete permittee.php?id=<?php echo $row["id"];?>" class="container row p-4 ml-5" align="center">
        <div class="col-sm-12 p-1 pl-5">Are you sure u want to delete the permittee?</div>
        <div class="col-sm-6 p-1" style="color: red;" align="right">Permittee Name:</div>
        <div class="col-sm-6 p-1" style="color: red;" align="left"><?php echo $row["name"];?></div>
        <div class="col-sm-6 p-1" style="color: red;" align="right">Agency:</div>
        <div class="col-sm-6 p-1" style="color: red;" align="left"><?php echo $row["agency"];?></div>
        <div class="col-sm-12 p-1">
          <button name="Yes" type="submit" class="btn btn-danger col-sm-3">Yes</button>
          <a href="Manage permittee.php"><div name="No" type="submit" class="btn btn-success col-sm-3">No</div></a>
        </div>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>