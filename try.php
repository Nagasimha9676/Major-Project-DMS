<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
  <div style="background-color: white;" class="row p-2">
    <div class="col-sm-12">&nbsp;</div>
    <table class="col-sm-12 table table-responsive-sm ">
      <thead class="thead-dark">
        <tr>
          <th>IC No</th>
          <th>Name</th>
          <th>Type Of User</th>
          <th>Enrolled On</th>
          <th>Approved On</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
            $query="SELECT * FROM `users`";
            if ($result = $con->query($query)) {
              while ($row = $result->fetch_assoc()) {
                $name = $row["dname"];
                echo '<tr> 
                        <td class="align-middle">'.$row["icno"].'</td> 
                        <td class="align-middle">'.$name.'</td>
                        <td class="align-middle">'.$row["memclass"].'</td>
                        <td class="align-middle">'.$row["resreqdate"].'</td>
                        <td class="align-middle">'.$row["resappdate"].'</td>
                        <td class="align-middle">
                          <div class="pt-1"><a href="update priviliges.php?id='.$row["icno"].'"><button class="btn btn-success">UPDATE PRIVILEGES</button></a></div>&emsp;
                          <div class="pt-1"><a href="#"><button class="btn btn-danger">SUSPEND MEMBER</button></a></div>
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
<div class="container-fluid mt-3">
  <div class="row">
  </div>
</div>
<?php require 'LoginFooter.php'?>