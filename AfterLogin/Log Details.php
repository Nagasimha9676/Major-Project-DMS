<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<table class="table table-hover">
    	<tbody>
      		<tr>
        		<th>Date(DD-MM-YYYY)</th>
        		<th>IN</th>
            <th>OUT</th>
      		</tr>
    	</tbody>
      <?php
      $user=$_SESSION["id"];
      $query = "SELECT * FROM `userlog` WHERE `uid`=".$user." and `sind`>'".date('Y-m-d',strtotime("-30 days"))."' ORDER BY `sind` DESC,`sint` DESC";
      if ($result = $con->query($query)) {
          while ($row = $result->fetch_assoc()) {
              $sind = $row["sind"];
              $sint = $row["sint"];
              $outt = $row["outt"];
              echo '<tr> 
                        <td>'.$sind.'</td> 
                        <td>'.$sint.'</td>
                        <td> '.$outt.'</td> 
                    </tr>';
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