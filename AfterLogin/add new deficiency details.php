<?php require 'LoginHeader.php'?>
<style>
.button {
  background-color: #4CAF50;
  border: white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<div class="card container-fluid">
  <div style="background-color: white;" class="container row">
      <form style="border: 2px dotted red;" class="container row m-2" method="post" action="adddef.php">
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-9 col-sm-12 row">
            <div class="col-sm-8 pl-2">MTA, AOH, PM, or CM Checks Deficiency ?</div>
            <div class="col-sm-4">
              <input type="radio" name="boolean" value="Yes" id="check1">
              <label for="check1" style="font-size: 18px;">Yes</label>&emsp;
              <input type="radio" name="boolean" value="No" id="check2">
              <label for="check2"style="font-size: 18px;">No</label>&emsp;
            </div>
          </div>
          <select id="selnat" name="naturework" class="col-lg-3 col-sm-12 row">
            <option name="naturework" value="0">Select Nature of Work</option>
            <?php
                $query="SELECT * FROM `aohmta`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='naturework' value='" . $row['aohmta'] ."'>" . $row['aohmta'] ."</option>";
                    }
                    $result->free();
                }
            ?>
          </select>
        </div>
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-4 col-sm-12 row">MAINTENANCE AGENCY:</div>
          <div class="col-lg-4 col-sm-12 row">LOCATION/SYSTEM:</div>
          <div class="col-lg-4 col-sm-12 row">EQUIPMENT NAME:</div>
        </div>
        <div class="container row">
          <div class="col-lg-4 col-sm-12 row">
            <select id="selma" name="MaintenanceAgency">
              <option name="MaintenanceAgency" value="0">Select Maintenance Agency</option>
              <?php
                $query="SELECT * FROM `agency`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='MaintenanceAgency' value='" . $row['aname'] ."'>" . $row['aname'] ."</option>";
                    }
                    $result->free();
                }
            ?>
            </select>
          </div>
          <div class="col-lg-4 col-sm-12 row">
            <select id="selma" name="Location">
              <option name="Location" value="0">Select Location/System</option>
              <?php
                $query="SELECT * FROM `location`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='Location' value='" . $row['lname'] ."'>" . $row['lname'] ."</option>";
                    }
                    $result->free();
                }
            ?>
            </select>
          </div><div class="col-lg-4 col-sm-12 row">
            <select id="selma" name="EquipmentName">
              <option name="EquipmentName" value="0">Select Equipment Name</option>
              <?php
                $query="SELECT * FROM `equipment`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='EquipmentName' value='" . $row['ename'] ."'>" . $row['ename'] ."</option>";
                    }
                    $result->free();
                }
            ?>
            </select>
          </div>
        </div>
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-12 col-sm-12 row">DESCRIPTION OF DEFICIENCY:(SELF-CONTAINED OF TOTAL DEFICIENCY AND NO JOB PLANNING DETAILS)</div>
          <div class="col-sm-12 pl-3 row">
          <textarea id="defdetails" name="entdef" placeholder="Enter Total Deficiency details except job planning (Do Not Enter like 'SWP may be Issued')" rows="4" class="col-sm-12"></textarea>
          </div>
        </div>
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-12 col-sm-12 row">MAINTENANCE JOB PLANNING DETAILS & REMARKS:(OPTIONAL)</div>
          <div class="col-sm-12 pl-3 row">
          <textarea id="maindetails" name="entmain" placeholder="Enter Maintenance Job planning details & Remarks" rows="3" class="col-sm-12"></textarea>
          </div>
        </div>
        <div class="container row"><br/></div>
        <div class="container row"><button class="button"><i class="fa fa-save"></i>&emsp;SAVE DEFICIENCY DETAILS </button></div>
        <div class="container row"><br/></div>
      </form>
    </div>
  </div>
  <div class="container-fluid mt-3 row">    
  </div>
</div>
<?php require 'LoginFooter.php'?>