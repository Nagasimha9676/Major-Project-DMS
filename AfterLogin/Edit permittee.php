<?php require 'LoginHeader.php'?>
<?php
$id=$_GET["id"];
$query=mysqli_query($con,"SELECT * FROM `permittee` WHERE `id`=".$id);
$rows=mysqli_fetch_assoc($query);
if(isset($_POST["Edit"]))
{
  echo "Hi";
  $query=mysqli_query($con,"UPDATE `permittee` SET `name`='".$POST["name"]."',`agency`='".$POST["agency"]."' WHERE `id`=".$id);
  if($query)
  {
    echo '<script type="text/javascript"> 
    alert("Permittee edited"); 
    window.location.href = "Manage permittee.php";
    </script>;';
  }
  else
  {
    echo '<script type="text/javascript"> 
    alert("Permittee couldn\'t be edited"); 
    window.location.href = "Manage Permittee.php";
    </script>;';
  }
}
?>
<div class="card container-fluid">
  <div style="background-color: white;" class="container">
      <form method="POST" action="Edit permittee2.php?id=<?php echo $id;?>" class="row p-4">
        <div class="col-sm-4 p-1">Agency:</div>
        <div class="col-sm-8 p-1">
          <select  class="col-sm-12" id="Agency" name="Agency">
                <option value="<?php echo $agency;?>">Select Agency</option>
                <?php
                   $sql1 = "SELECT `aname` FROM `agency`";
                    $result1 = mysqli_query($con, $sql1);
                     while($row = mysqli_fetch_assoc($result1)){
                        $selected='';
                        if($row['aname']==$rows['agency'])
                            $selected="selected";
                     echo '<option name="agency" value="'.htmlspecialchars($row['aname']).'" '.$selected.'>'.htmlspecialchars($row['aname']). '</option>'; }
                ?> 
            </select>
        </div>
      	<div class="col-sm-4 p-1">Permittee Name:</div>
      	<div class="col-sm-8 p-1"><input type="text" name="name" class="col-sm-12" value="<?php echo $rows["name"];?>"></div>
      	<div class="col-sm-12 p-1" align="center"><button name="Yes" type="submit" class="btn btn-success col-sm-3">Edit</button></div>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>