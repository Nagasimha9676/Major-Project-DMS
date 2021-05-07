<?php
date_default_timezone_set('Asia/Kolkata');
$con = new mysqli("localhost","root","","projectdms");
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>