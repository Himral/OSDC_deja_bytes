<!DOCTYPE html>
<html>
<head>
	<title>NGO Registration</title>
</head>
<body>
	<form name = "cNGO" ACTION = "ngoform.php" METHOD = "POST" >
		<h2>Register your NGO <br></h2>
		Registration Number :   
		<input type="text" id="rno" name="rno" value="<?php print $rno; ?>" required> <br>
        President Name :   
		<input type="text" id="pname" name="pname" value="<?php print $pname; ?>" ><br>
        Contact Number :
		<input type="text" id="phone" name="phone" value="<?php print $phone; ?>" required><br>
        Email :
        <input type= "email" id="ngomail" name="ngomail" value="<?php print $ngomail; ?>" ><br>
        Locality :
        <input type = "text" id = "loc" name="loc" value="<?php print $loc; ?>" ><br>
        Pincode :
        <input type = "text" id = "pin" name="pin" value="<?php print $pin; ?>" ><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
