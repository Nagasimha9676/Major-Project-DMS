<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
  <div style="background-color: white;" class="row p-2">
    <div class="col-sm-12">&nbsp;</div>
    <div class="col-sm-12 p-2" align="right"><a href="Add permittee.php"><button><i class="fa fa-plus"></i></button></a></div>
    <table class="col-sm-12 table table-responsive-sm">
      <thead class="thead-dark">
        <tr>
          <th>Sno</th>
          <th>Permittee Name</th>
          <th>Agency</th>
          <th>Existing SWP</th>
          <th>Added On</th>
          <th>Added By</th>
          <th>Edit/ Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sno=1;
            $query="SELECT id, agency, name, pfrom, addedby FROM permittee WHERE status = 'active' ORDER by pfrom DESC, name ASC";
            if ($result = $con->query($query)) {
              while ($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $pfrom = $row["pfrom"];
                $agency = $row["agency"];
                $addedby = $row["addedby"];
                $sql="SELECT rid FROM records WHERE status <> 'SWP CLEARED' AND permittee = ".$row["id"];
                $result2 = mysqli_query($con, $sql);
                $count1 = mysqli_num_rows($result2);
                echo '<tr> 
                        <td>'.$sno.'</td> 
                        <td>'.$name.'</td>
                        <td>'.$agency.'</td>
                        <td>'.$count1.'</td>
                        <td>'.$pfrom.'</td>
                        <td>'.$addedby.'</td>
                        <td><a href="Edit permittee.php?id='.$row["id"].'"><button><i class="fa fa-edit"></i></button></a>&emsp;<a href="delete permittee.php?id='.$row["id"].'"><button><i class="fa fa-trash"></i></button></a></td>

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