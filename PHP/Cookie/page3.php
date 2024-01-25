<?php
$maggi = $_POST['maggi'];
$g = $_POST['oats'];
$mpt = $maggi * 10;
$gpt = $g * 10;
$page2_total = $mpt + $gpt;
setcookie("p2_total",$page2_total);
if((isset($_COOKIE['p1_total'])) && (isset($_COOKIE['p2_total'])))
setcookie("grand_total",($_COOKIE['p1_total']+$_COOKIE['p2_total']));
?>
<div style="top:5px;right:5px;position:absolute"><?php if(isset($_COOKIE['name'])) echo "Welcome ".$_COOKIE['name']; ?></div>
<h1>Shopping Mall
<h1>First Page Total <?php if(isset($_COOKIE['p1_total']))  echo $_COOKIE['p1_total']; ?>

<h1>Second Page Total <?php if(isset($_COOKIE['p2_total']))  echo $_COOKIE['p2_total']; ?>

<h1>Total Bill <?php if(isset($_COOKIE['grand_total']))  echo $_COOKIE['grand_total']; ?>


<a href="page1.php">Page1</a>
</body>
</html>