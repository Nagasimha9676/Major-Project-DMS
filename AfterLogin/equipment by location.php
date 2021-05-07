<?php require 'LoginHeader.php'?>
<?php
if(isset($_POST["location"]))
{
  $loc=$_POST["location"];
  $query1="SELECT * FROM `equipment`,`location` WHERE `equipment`.`lid`=`location`.`lid` AND `location`.`lname`=".$loc;
}
?>
<script type="text/javascript">
function submitform()
{
  document.forms["myform"].submit();
}
</script>
<div class="card container-fluid">
  <div style="background-color: white;" class="row p-2">
    <div class="col-sm-12">&nbsp;</div>
    <div class="col-lg-7 col-sm-12">
      <div class="row">
        <div class="col-sm-7 row">
          <div class="col-sm-6 pt-2">LOCATION/SYSTEM</div>
          <form id="myform" method="POST" action="equipment by location.php" class="col-sm-6 p-0">
          <select id="selloc" name="location" class="col-sm-12 pt-1 pb-1" onchange="submitform()">
            <option name='location' value="1">Select Location/System</option>
            <?php
                $query="SELECT * FROM `location`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='location' value='" . $row['lname'] ."'>" . $row['lname'] ."</option>";
                    }
                    $result->free();
                }
            ?>
          </select> 
          </form>
        </div>
        <div class="col-sm-5"><a href="addequipment.php"><button class="btn btn-primary" style="background-color: #4CAF50; border: white; color: white;"><i class="fa fa-plus"></i>&ensp;ADD NEW EQUIPMENT</button></a></div>
      </div>
    </div>
    <div class="col-lg-7 col-sm-12">
      <div class="row">&nbsp;</div>
      <div class="row">&emsp;&emsp;
        <?php
          if(isset($_POST["location"]))
          {
            $loc=$_POST["location"];
            echo "Location:".$loc;
          }
          ?>

      </div>
      <table class="row col-sm-12 table table-responsive-sm pt-1" width="100%" align="center">
        <tbody class="col-sm-12" width="100%">
          <tr class="thead-dark">
            <th>SNo</th>
            <th>Equipment Name</th> 
          </tr>
          <?php
          if(isset($_POST["location"]))
          {
          $sno=1;
          $query="SELECT * FROM `equipment`,`location` WHERE `equipment`.`lid`=`location`.`lid` AND `location`.`lname`='".$loc."'";
          if ($result = $con->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $ename = $row["ename"];
                echo '<tr> 
                        <td>'.$sno.'</td> 
                        <td>'.$ename.'</td>
                    </tr>';
                $sno=$sno+1;
            }
            $result->free();
          }
        }?>
        </tbody>
      </table>
    </div>
    <table class="col-lg-5 col-sm-12 row table table-responsive pt-1">
      <thead class="thead-dark">
        <tr>
          <th>SNo</th>
          <th>Location/System Name</th>
          <th>No of Equipments</th> 
        </tr>
      </thead>
      <?php
          $sno=1;
          $query="SELECT `location`.`lid`,`lname`,COUNT(`location`.`lid`) AS `count` FROM `equipment`,`location` WHERE `equipment`.`lid`=`location`.`lid` GROUP BY `location`.`lid` ORDER BY `lname`";
          if ($result = $con->query($query)) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr> 
                        <td>'.$sno.'</td> 
                        <td>'.$row["lname"].'</td> 
                        <td>'.$row["count"].'</td>
                    </tr>';
                $sno=$sno+1;
            }
            $result->free();
        }?>
    </table>    
  </div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
    
  </div>
</div>
<?php require 'LoginFooter.php'?>