<?php
  require "../connect.php";
  $query=mysqli_query($con,"SELECT * FROM `users` WHERE `ustatus`='TO BE APPROVED'");
  $rowcnt=mysqli_num_rows($query);
  if($rowcnt==0)
    header("Location:noappmem.php");
?>
<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
  <div style="background-color: white;" class="row p-2">
    <div class="col-sm-12">&nbsp;</div>
    <table class="col-sm-12 table table-responsive-sm ">
      <thead class="thead-dark">
        <tr>
          <th>IC No</th>
          <th>Name</th>
          <th>Registered On</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sno=1;
            $query="SELECT * FROM `users` WHERE `ustatus`='TO BE APPROVED'";
            if ($result = $con->query($query)) {
              while ($row = $result->fetch_assoc()) {
                $icno = $row["icno"];
                $dname = $row["dname"];
                $memfrom = $row["memfrom"];
                echo '<tr> 
                        <td>'.$icno.'</td> 
                        <td>'.$dname.'</td>
                        <td>'.$memfrom.'</td>
                        <td align="center">
                          <a href="memapp.php?id='.$row["icno"].'"><button class="btn btn-success"><i class="fa fa-check"></i>&nbsp;Approve Member</button></a>&emsp;
                          <a href="memdec.php?id='.$row["icno"].'"><button class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;Decline Member</button></a></td>
                    </tr>';
                $sno=$sno+1;
            }
            $result->free();
          }
        ?>
    </tbody>
  </table>
</div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
  </div>
</div>
<?php require 'LoginFooter.php'?>