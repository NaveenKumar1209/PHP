<center>
<?php
include "conn.php";
include "index.php";
echo "<br>";
if(isset($_POST['update']))
{
	$sql="update empdetail set empname='".$_POST['name']."',emppos='".$_POST['pos']."',empsalary='".$_POST['sal']."' where empid='".$_POST['empid']."'";
	$query=mysqli_query($con,$sql);
	echo "Updated Successfully";
}
$empid=$_GET['empid'];
$sql="select * from empdetail where empid='$empid'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
if($row!=null)
{
?>
<form action="#" method="post">
<input type="hidden" name="empid" value="<?php echo $row[0]; ?>">
<table>
<tr><td>Enter Name:</td><td><input type="text" name="name" value="<?php echo $row[1]; ?>"></td></tr>
<tr><td>Enter Position:</td><td><input type="text" name="pos" value="<?php echo $row[2]; ?>"></td></tr>
<tr><td>Enter Salary:</td><td><input type="text" name="sal" value="<?php echo $row[3]; ?>"></td></tr>
<tr><td></td><td><input type="submit" name="update"></td></tr></table>
</form>
<?php
}
?>
</div>
</center>