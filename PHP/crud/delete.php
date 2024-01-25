<?php
include "conn.php";
$empid=$_GET['empid'];
$sql="delete from empdetail where empid='$empid'";
$query=mysqli_query($con,$sql);
header("location:viewemp.php?msg=Record Deleted Successfully");
?> 