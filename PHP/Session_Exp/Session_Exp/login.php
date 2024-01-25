<?php
session_start();
if(isset($_POST['name']) && !empty($_POST['name'])) {
	$_SESSION['name']=$_POST['name'];
	$_SESSION['time']=time();
	header("Location:product.php"); 
	
}
else
	header("Location:index.php?message=fill the field");
?>
<a href="product.php">Product</a>
<a href="logout.php">Logout</a>