<body style="background-color:powderblue; margin-top:5cm; margin-left:15cm">
<?php
$nameerr=$name=$roll=$rollerr=$doberr=$dob=$moberr=$mob=$emailerr=$email=""; 
?>
<?php
if(isset($_POST['submit']))
{
	if(empty($_POST['name']))
		$nameerr="name is required";
	else if(!preg_match("/^[A-Z][a-z]+([ ][A-Z][a-z]+|[a-z]+)+([ ][A-Z]{0,2})*$/",$_POST['name']))
		$nameerr="Only letters ans spaces are allowed";
	else
		$name=$_POST['name'];

	if(empty($_POST['rollno']))
		$rollerr="rollno is required";
	else if(!preg_match("/^\d{2}[a-z]{3}\d{3}$/",$_POST['rollno']))
		$rollerr="Invalid format";
	else
		$roll=$_POST['rollno'];

	if(empty($_POST['dob']))
		$doberr="dob is required";
	else if(!preg_match("/^(0[1-9]|[1-2][0-9]|3[0-2])\.(0[1-9]|1[0-2])\.([0-9]{4})$/",$_POST['dob']))
		$doberr="dd.mm.yyyy format required";
	else
		$dob=$_POST['dob'];

	if(empty($_POST['mobile']))
		$moberr="mobile number is required";
	else if(!preg_match("/^[6-9][0-9]{9}$/",$_POST['mobile']))
		$moberr="Invalid Number";
	else
		$mob=$_POST['mobile'];

	if(empty($_POST['email']))
		$emailerr="mail id is required";
	else if(!preg_match("/([a-zA-Z0-9\.\-_]+)@(\w+[\.\-_]?\w+)\.([a-z]{2,3})(\.[a-z]{2})?$/",$_POST['email']))
		$emailerr="Invalid id";
	else
		$email=$_POST['email'];
}
if(($name!="") && ($roll!="") && ($dob!="") && ($mob!="") && ($email!=""))
	{
	echo $name;
	echo "<br>";
	echo $roll;
	echo "<br>";
	echo $dob;
	echo "<br>";
	echo $mob;
	echo "<br>";
	echo $email;
	}
else
{
include "regexpform1.php";
}
	
?>
