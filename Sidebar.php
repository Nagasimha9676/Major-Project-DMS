<div class="hoverable">
    <div class="card">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-header panel-title" style="background-color: #FF4500; font-weight: 700;">
                        <a data-toggle="collapse" href="#collapse1" style="text-decoration: none; color: white;">
                            <i class="fa fa-gears"></i>&emsp;OPTIONS<i class="fa fa-sort-down float-right"></i>
                        </a>
                    </div>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item menu"><a href="DashboardContent.php" style="color:white; text-decoration: none;"><i class="fa fa-home"></i>&emsp;Home</a></li>
                        <li class="list-group-item menu"><a href="Dailyreports.php" style="color:white; text-decoration: none;"><i class="fa fa-calendar"></i>&emsp;Daily Reports</a></li>
                        <li class="list-group-item menu"><a href="Forgotpassword.php" style="color:white; text-decoration: none;"><i class="fa fa-lock"></i>&emsp;Forgot Password</a></li>
                        <li class="list-group-item menu"><a href="Signup.php" style="color:white; text-decoration: none;"><i class="fa fa-user-plus"></i>&emsp;Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>
    <br/>
    <div class="card">
        <div class="card-header" style="color: white; background-color: #FF4500; font-weight: 700;">HALL OF FAME</div>
        <div class="card-body" style="background-color: #FF8C00; ">
            <div class="card-subtitle table-responsive">
                <table width="100%" style="color: white;">
                    <?php
                        $query = "SELECT editedby, COUNT(editedby) AS magnitude FROM editstat GROUP BY editedby ORDER BY magnitude DESC LIMIT 6";
                        if ($result = $con->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $editedby = $row["editedby"];
                                $magnitude = $row["magnitude"];
                                echo 
                                '<tr>
                                    <td style="font-size: 15px;">'.$editedby.'</td> 
                                    <td style="font-size: 15px;" align="center">'.$magnitude.'</td>
                                </tr>';
                            }
                            $result->free();
                        }?>                 
                </table>
            </div>
        </div>
    </div>
</div>
