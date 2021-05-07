<?php require 'LoginHeader.php'?>
<?php
$icno=$_GET["id"];
$query="SELECT * FROM `users` WHERE `icno`=".$icno;
$result = $con->query($query);
$row = $result->fetch_assoc();
?>
<div class="card container-fluid">
  <div style="background-color: white;" class="container">
      <form method="POST" action="updatepriviligespage2.php?id=<?php echo $icno;?>" class="row p-4">
        <div class="col-sm-4 p-1">IC No:</div>
        <div class="col-sm-8 p-1"><?php echo $icno;?></div>
        <div class="col-sm-4 p-1">Name:</div>
        <div class="col-sm-8 p-1"><?php echo $row["dname"];?></div>
        <div class="col-sm-4 p-1">Current Privileges:</div>
        <div class="col-sm-8 p-1"><?php if($row["memclass"]=="USER") echo "NORMAL PRIVILEGES"; else if($row["memclass"]=="USERPLUS") echo "UPDATE PRIVILEGES"; else if($row["memclass"]=="ADMIN") echo "ADMINISTRATION PRIVILEGES"; else if($row["memclass"]=="ADMINPLUS") echo "SUPER ADMIN PRIVILEGES";?></div>
        <div class="col-sm-4 p-1">Enrolled On:</div>
        <div class="col-sm-8 p-1"><?php echo $row["resreqdate"];?></div>
        <div class="col-sm-4 p-1">Approved On:</div>
        <div class="col-sm-8 p-1"><?php echo $row["resappdate"];?></div>
        <div class="col-sm-4 p-1">Update Privileges to:</div>
        <div class="col-sm-8 p-1">
          <select  class="col-sm-8" id="privilege" name="privilege">
                <option value="0">Select Privileges</option>
                <?php
                  $sql1 = "SELECT * FROM `class` WHERE `vlname`<>'".$row["memclass"]."'";
                  $result1 = mysqli_query($con, $sql1);
                  while($row = mysqli_fetch_assoc($result1)){
                    echo '<option value="'.$row['clname'].'">'.$row['clname']. '</option>'; }
                ?> 
            </select>
        </div>
        <div class="col-sm-12 p-1"><button type="Submit" class="btn btn-success"><i class="fa fa-hourglass-half"></i>Update Privileges</button></div>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>