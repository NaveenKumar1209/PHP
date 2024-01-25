<?php setcookie("name",$_POST['name']) ?>
<?php
$rice = $_POST['rice'];
$wheat = $_POST['wheat'];
$tr = $rice * 40;
$wt = $wheat * 60;
$pt = $tr + $wt;
setcookie("p1_total",$pt);
?>
<h1>Shopping Mall</h1>
<div style="top:5px;right:5px;position:absolute"><?php if(isset($_COOKIE['name'])) echo "Welcome ".$_COOKIE['name']; ?></div>
<form action="page3.php" method="post">
Maggi :
<select name="maggi">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
Oats :
<select name="oats">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php if(isset($_COOKIE['p1_total'])) echo "Page_1 Total : ".$_COOKIE['p1_total']; 
?>