<center>
<?php
include "index.php";
include "conn.php";
echo "<br>";
if(isset($_POST['search']))
{
	$pos=$_POST['emppos'];
	$sql="select * from empdetail where emppos='$pos'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0)
	{
		echo "<table border=1><tr>";
		$field=mysqli_fetch_fields($res);
		foreach($field as $col)
			echo "<th>".$col->name."</th>";	
		echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			for($i=0;$i<mysqli_num_fields($res);$i++)
				echo "<td>".$row[$i]."</td>";	
			echo "</tr>";
		}
	}
	else
		echo "Not Found";
}
?>
<form action="#" method="post">
<input type="text" name="emppos">
<input type="submit" name="search">
</form>
</center>