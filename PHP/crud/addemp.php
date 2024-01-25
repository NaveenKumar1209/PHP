<center>
<?php
include "conn.php";
include "index.php";
echo "<br>";
$name=$pos=$sal="";
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$pos=$_POST['pos'];
	$sal=$_POST['sal'];
	$sql="insert into empdetail(empname,emppos,empsalary) values('$name','$pos','$sal')";
	$query=mysqli_query($con,$sql);
	echo "Record Inserted Successfully";
}
?>
<form action="#" method="post">
<table>
<tr><td>Enter Name:</td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
<tr><td>Enter Position:</td><td><input type="text" name="pos" value="<?php echo $pos; ?>"></td></tr>
<tr><td>Enter Salary:</td><td><input type="text" name="sal" value="<?php echo $sal; ?>"></td></tr>
<tr><td></td><td><input type="submit" name="insert"></td></tr></table>
</form>
</div>
</center>