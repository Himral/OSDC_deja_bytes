<!DOCTYPE html>
<html>
<head>
	<title>Doctor Registration</title>
</head>
<body>
	<form name = "doctor" ACTION = "doctorform.php" METHOD = "POST" >
		<h2>Register yourself as a Doctor <br></h2>
		First Name :   
		<input type="text" id="fname" name="fname" value="<?php print $fname; ?>" required> <br>
        Middle Name :   
		<input type="text" id="mname" name="mname" value="<?php print $mname; ?>" ><br>
        Last Name :   
		<input type="text" id="lname" name="lname" value="<?php print $lname; ?>" required ><br>
        Mobile Number :
		<input type="text" id="phone" name="phone" value="<?php print $mobileno; ?>" required><br>
        Email :
        <input type= "email" id="docmail" name="docmail" value="<?php print $docmail; ?>" ><br>
        Hospital Name :
        <input type = "text" id = "hname" name="hname" value="<?php print $hname; ?>" ><br>
        Locality :
        <input type = "text" id = "loc" name="loc" value="<?php print $loc; ?>" ><br>
        Expertise :
        <input type = "text" id = "expert" name="expert" value="<?php print $expert; ?>" ><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
