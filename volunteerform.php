<!DOCTYPE html>
<html>
<head>
	<title>Volunteer Registration</title>
</head>
<body>
	<form name = "volunteer" ACTION = "volunteerform.php" METHOD = "POST" >
		<h2>Register yourself as a Volunteer <br></h2>
		First Name :   
		<input type="text" id="fname" name="fname" value="<?php print $fname; ?>" required> <br>
        Middle Name :   
		<input type="text" id="mname" name="mname" value="<?php print $mname; ?>" ><br>
        Last Name :   
		<input type="text" id="lname" name="lname" value="<?php print $lname; ?>" ><br>
        Mobile Number :
		<input type="text" id="phone" name="phone" value="<?php print $mobileno; ?>" required><br>
        Email :
        <input type= "email" id="vmail" name="vmail" value="<?php print $vmail; ?>" ><br>
        Gender :
        <input type = "Radio" name = "gender" Value= "Male"> Male
		<input type = "Radio" name = "gender" Value= "Female"> Female
        <input type = "Radio" name = "gender" Value= "Others"> Others <br>
        Address :
        <input type = "text" id = "address" name="address" value="<?php print $address; ?>" ><br>
        Locality :
        <input type = "text" id = "loc" name="loc" value="<?php print $loc; ?>" ><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
