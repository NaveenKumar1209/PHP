<html>
<style>.error{color:red;}</style>
<form action="" method="post">
<table>
<tr>
<td>Name</td><td><input type="text" name="name" value='<?php echo $name;?>' placeholder="enter first name"> <span class="error">*<?php echo $nameerr;?></span></td></tr><tr>
<td>RollNo</td><td><input type="text" name="rollno" value='<?php echo $roll;?>' placeholder="enter rollno"> <span class="error">* <?php echo $rollerr;?></span></td></tr><tr>
<td>DOB</td><td><input type="text" name="dob" value='<?php echo $dob;?>' placeholder="enter dob"> <span class="error">* <?php echo $doberr;?></span></td></tr><tr>
<td>Mobile</td><td><input type="text" name="mobile" value='<?php echo $mob;?>' placeholder="enter mobile number"> <span class="error">* <?php echo $moberr;?></span></td></tr>
<tr><td>Email</td><td><input type="text" name="email" value='<?php echo $email;?>' placeholder="enter mail id"> <span class="error">* <?php echo $emailerr;?></span></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>

</body>
</html>
