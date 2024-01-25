<html>
<body>
<form action="page2.php" method="post">
<h1>Shopping Mall</h1>
Enter Your name: <input type="text" name="name"><br>
Rice :
<select name="rice">
<option value="2">2 Kg</option>
<option value="5">5 Kg</option>
<option value="10">10 Kg</option>
<option value="15">15 Kg</option>
</select>
Wheat :
<select name="wheat">
<option value="2">2 Kg</option>
<option value="5">5 Kg</option>
<option value="10">10 Kg</option>
<option value="15">15 Kg</option>
</select>
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php 
echo "<br>";
if(isset($_COOKIE['grand_total']))
{
echo $_COOKIE['p1_total']."+".$_COOKIE['p2_total']."=".$_COOKIE['grand_total'];
}
setcookie("grand_total","");
?>