<center>
<?php
include "conn.php";
include "index.php";
echo "<br>";
$res=mysqli_query($con,"select * from empdetail");
?>
<table border=1>
<?php
$c=0;
$field=mysqli_fetch_fields($res);
if(mysqli_num_rows($res)>0)
{
	echo "<tr>";
	foreach($field as $col)
	{
		if($c==0) { ++$c; continue; }
		echo "<th>".$col->name."</th>";
	}
	echo "</tr>";	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		for($i=1;$i<mysqli_num_fields($res);$i++)
		{
			echo "<td>".$row[$i]."</td>";
		}
		echo "<td><a href='edit.php?empid=$row[0]'>Edit</a></td>
			<td><a href='delete.php?empid=$row[0]'>Delete</a></td></tr>";
	}
}
if(!empty($_GET['msg']))
{
	$msg=$_GET['msg'];
	echo $msg;
}
$sql="select count(*) from empdetail";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
echo "Total :".$row[0];
?>
</table>
</div>
</center>