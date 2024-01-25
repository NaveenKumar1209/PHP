<form action="login.php" method="post">
<input type="text" name="name">
<input type="text" name="name">
<input type="submit">
</form>
<?php
if(!empty($_GET['message'])){
	echo $_GET['message'];
	$_GET['message']="";}
?>
<a href="product.php">Product</a>