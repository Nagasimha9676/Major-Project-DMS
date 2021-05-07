<?php require 'LoginHeader.php'?>
<?php
/*
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
}*/
?>
<div class="container-fluid">
    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active border border-success border-bottom-0" id="tabA-tab" data-toggle="tab" href="#tabA" role="tab" aria-controls="tabA" aria-selected="true">ACTIVE USERS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link border border-success border-bottom-0" id="tabB-tab" data-toggle="tab" href="#tabB" role="tab" aria-controls="tabB" aria-selected="false">ACTIVE SUPER USERS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link border border-success border-bottom-0" id="tabC-tab" data-toggle="tab" href="#tabC" role="tab" aria-controls="tabC" aria-selected="false">ACTIVE ADMINISTRATORS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link border border-success border-bottom-0" id="tabD-tab" data-toggle="tab" href="#tabD" role="tab" aria-controls="tabD" aria-selected="false">ACTIVE SUPER ADMINS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link border border-success border-bottom-0" id="tabE-tab" data-toggle="tab" href="#tabE" role="tab" aria-controls="tabE" aria-selected="false">INACTIVE MEMBERS</a>
        </li>
     </ul>
      <div class="tab-content" style="background-color: white;">
        <div class="container tab-pane p-2 active border border-success" id="tabA" role="tabpanel" aria-labelledby="tabA-tab">
          <table class="col-sm-12 table table-responsive-sm ">
            <thead class="thead-dark">
              <tr>
                <th>IC No</th>
                <th>Name</th>
                <th>Current Priviliges</th>
                <th>Enrolled On</th>
                <th>Approved On</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query="SELECT * FROM `users` WHERE ustatus='active' AND `memclass`='USER'";
                  if ($result = $con->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                      $name = $row["dname"];
                      echo '<tr> 
                        <td class="align-middle">'.$row["icno"].'</td> 
                        <td class="align-middle">'.$name.'</td>
                        <td class="align-middle">NORMAL PRIVILEGES</td>
                        <td class="align-middle">'.$row["resreqdate"].'</td>
                        <td class="align-middle">'.$row["resappdate"].'</td>
                        <td class="align-middle">
                          <div class="pt-1"><a href="update priviliges.php?id='.$row["icno"].'"><button class="btn btn-success">UPDATE PRIVILEGES</button></a></div>&emsp;
                          <div class="pt-1"><a href="suspend member.php?id='.$row["icno"].'"><button class="btn btn-danger">SUSPEND MEMBER</button></a></div>
                        </td>
                    </tr>';
                  }
                  $result->free();
                }
              ?>
            </tbody>
          </table>
        </div>      
        <div class="container tab-pane p-2 border border-success" id="tabB" role="tabpanel" aria-labelledby="tabB-tab">
          <table class="col-sm-12 table table-responsive-sm ">
            <thead class="thead-dark">
              <tr>
                <th>IC No</th>
                <th>Name</th>
                <th>Current Priviliges</th>
                <th>Enrolled On</th>
                <th>Approved On</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query="SELECT * FROM `users` WHERE ustatus='active' AND `memclass`='USERPLUS'";
                  if ($result = $con->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                      $name = $row["dname"];
                      echo '<tr> 
                        <td class="align-middle">'.$row["icno"].'</td> 
                        <td class="align-middle">'.$name.'</td>
                        <td class="align-middle">UPDATE PRIVILEGES</td>
                        <td class="align-middle">'.$row["resreqdate"].'</td>
                        <td class="align-middle">'.$row["resappdate"].'</td>
                        <td class="align-middle">
                          <div class="pt-1"><a href="update priviliges.php?id='.$row["icno"].'"><button class="btn btn-success">UPDATE PRIVILEGES</button></a></div>&emsp;
                          <div class="pt-1"><a href="suspend member.php?id='.$row["icno"].'"><button class="btn btn-danger">SUSPEND MEMBER</button></a></div>
                        </td>
                    </tr>';
                  }
                  $result->free();
                }
              ?>
            </tbody>
          </table>
        </div>  
        <div class="container tab-pane p-2 border border-success" id="tabC" role="tabpanel" aria-labelledby="tabC-tab">
          <table class="col-sm-12 table table-responsive-sm ">
            <thead class="thead-dark">
              <tr>
                <th>IC No</th>
                <th>Name</th>
                <th>Current Priviliges</th>
                <th>Enrolled On</th>
                <th>Approved On</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query="SELECT * FROM `users` WHERE ustatus='active' AND `memclass`='ADMIN'";
                  if ($result = $con->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                      $name = $row["dname"];
                      echo '<tr> 
                        <td class="align-middle">'.$row["icno"].'</td> 
                        <td class="align-middle">'.$name.'</td>
                        <td class="align-middle">ADMINISTRATION PRIVILEGES</td>
                        <td class="align-middle">'.$row["resreqdate"].'</td>
                        <td class="align-middle">'.$row["resappdate"].'</td>
                        <td class="align-middle">
                          <div class="pt-1"><a href="update priviliges.php?id='.$row["icno"].'"><button class="btn btn-success">UPDATE PRIVILEGES</button></a></div>&emsp;
                          <div class="pt-1"><a href="suspend member.php?id='.$row["icno"].'"><button class="btn btn-danger">SUSPEND MEMBER</button></a></div>
                        </td>
                    </tr>';
                  }
                  $result->free();
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="container tab-pane p-2 border border-success" id="tabD" role="tabpanel" aria-labelledby="tabD-tab">
          <table class="col-sm-12 table table-responsive-sm ">
            <thead class="thead-dark">
              <tr>
                <th>IC No</th>
                <th>Name</th>
                <th>Current Priviliges</th>
                <th>Enrolled On</th>
                <th>Approved On</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query="SELECT * FROM `users` WHERE ustatus='active' AND `memclass`='ADMINPLUS'";
                  if ($result = $con->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                      $name = $row["dname"];
                      echo '<tr> 
                        <td class="align-middle">'.$row["icno"].'</td> 
                        <td class="align-middle">'.$name.'</td>
                        <td class="align-middle">SUPER ADMIN PRIVILEGES</td>
                        <td class="align-middle">'.$row["resreqdate"].'</td>
                        <td class="align-middle">'.$row["resappdate"].'</td>
                        <td class="align-middle">
                          <div class="pt-1"><a href="update priviliges.php?id='.$row["icno"].'"><button class="btn btn-success">UPDATE PRIVILEGES</button></a></div>&emsp;
                          <div class="pt-1"><a href="suspend member.php?id='.$row["icno"].'"><button class="btn btn-danger">SUSPEND MEMBER</button></a></div>
                        </td>
                    </tr>';
                  }
                  $result->free();
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="container tab-pane p-2 border border-success" id="tabE" role="tabpanel" aria-labelledby="tabE-tab">
          <table class="col-sm-12 table table-responsive-sm ">
            <thead class="thead-dark">
              <tr>
                <th>IC No</th>
                <th>Name</th>
                <th>Status</th>
                <th>Enrolled On</th>
                <th>Approved On</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query="SELECT * FROM `users` WHERE ustatus='inactive'";
                  if ($result = $con->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                      $name = $row["dname"];
                      echo '<tr> 
                        <td class="align-middle">'.$row["icno"].'</td> 
                        <td class="align-middle">'.$name.'</td>
                        <td class="align-middle">'.$row["ustatus"].'</td>
                        <td class="align-middle">'.$row["resreqdate"].'</td>
                        <td class="align-middle">'.$row["resappdate"].'</td>
                        <td class="align-middle">
                          <a href="resume member.php?id='.$row["icno"].'"><button class="btn btn-warning">Resume Member</button></a>
                        </td>
                    </tr>';
                  }
                  $result->free();
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
  </div>  
<?php require 'LoginFooter.php'?>