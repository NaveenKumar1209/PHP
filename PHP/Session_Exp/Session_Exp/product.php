<?php
session_start();
?>
<div onmouseover="window.location.reload()">
<?php
if(isset($_SESSION['name'])) {
	echo "Hello ".$_SESSION['name']." Welcome to the Product page"; 
	if((time()-$_SESSION['time'])>10){
		session_destroy();
		header("Location:index.php?message=Session Expired, Login Again");
	}
}
else
	header("Location:index.php?message=Login First");
$_SESSION['time']=time();
?>
</div>
<a href="index.php">login</a>
<a href="logout.php">Logout</a>