<!DOCTYPE html>
<html>
<head>
	<title>Register the Child</title>
</head>
<body>
	<form name = "child" ACTION = "childform.php" METHOD = "POST" >
		<h2>Register yourself at an NGO <br>(एनजीओ में रजिस्टर करें)</h2>
		First Name :   
		<input type="text" id="fname" name="fname" value="<?php print $fname; ?>" required> <br>
        Middle Name :   
		<input type="text" id="mname" name="mname" value="<?php print $mname; ?>" ><br>
        Last Name :   
		<input type="text" id="lname" name="lname" value="<?php print $lname; ?>" ><br>
        Mobile Number :
		<input type="text" id="phone" name="phone" value="<?php print $mobileno; ?>" required><br>
        Gender :
        <input type = "Radio" name = "gender" Value= "Male"> Male
		<input type = "Radio" name = "gender" Value= "Female"> Female
        <input type = "Radio" name = "gender" Value= "Others"> Others <br>
        Address :
        <input type = "text" id = "address" name="address" value="<?php print $address; ?>" ><br>
        Locality :
        <input type = "text" id = "loc" name="loc" value="<?php print $loc; ?>" ><br>
        Pincode :
        <input type = "text" id = "pin" name="pin" value="<?php print $pin; ?>" ><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
