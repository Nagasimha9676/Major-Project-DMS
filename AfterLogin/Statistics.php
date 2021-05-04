<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<table class="table table-hover">
    	<tbody>
      		<tr>
        		  <td>Total Records</td>
        		  <td>
              <?php
                  $query = "SELECT * FROM `records`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>    
            </td>
      		</tr>
      		<tr>
        		<td>Total Members of DMS family</td>
        		<td>
            <?php
                  $query = "SELECT * FROM `users`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>  
            </td>
      		</tr>
      		<tr>
        		<td>Total Number of Permittee</td>
        		<td>
              <?php
                  $query = "SELECT * FROM `permittee`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>
            </td>
      		</tr>
      		<tr>
        		<td>Total Number of Equipment</td>
        		<td>
            <?php
                  $query = "SELECT * FROM `equipment`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>  
            </td>
      		</tr>
      		<tr>
        		<td>Total Records of Update TimeLine</td>
        		<td>
              <?php
                  $query = "SELECT * FROM `editstat`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>    
            </td>
      		</tr>
      		<tr>
        		<td>Total Records of Edit History</td>
        		<td>
             <?php
                  $query = "SELECT * FROM `editdr`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>
            </td>
      		</tr>
      		<tr>
      			<td>Total User Log Records</td>
      			<td>
           <?php
                  $query = "SELECT * FROM `userlog`";
                  $result = mysqli_query($con, $query);
                  $count1 = mysqli_num_rows($result);
                  echo $count1;
              ?>   
            </td>
      		</tr>
    	</tbody>
  	</table>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>