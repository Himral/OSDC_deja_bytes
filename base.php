<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "sehyogi";

$con = mysqli_connect($host,$user,$pass,$db_name);

if(mysqli_connect_errno())
{
    die("Failed to connect to database".mysqli_connect_error());
}

//DB Create and Connect
/*$db_create = "CREATE DATABASE sehyogi;";
$a = mysqli_query($con,$db_create);
if(!mysqli_query($con,$db_create))
{
    die("Failed to create database:".mysqli_error($con));
}*/

// Table creation

$children = "CREATE TABLE Children
(Id INT AUTO_INCREMENT,
NGO_no INT,
FirstName VARCHAR(20) NOT NULL,
MidName VARCHAR(20),
LastName VARCHAR(20),
MobileNo VARCHAR(10) NOT NULL,
Gender VARCHAR (20),
_Address VARCHAR (30),
Locality VARCHAR (50),
Pincode VARCHAR (10) NOT NULL,
PRIMARY KEY (Id))";

/*if(!mysqli_query($con,$children))
{
die(mysqli_error($con));
}*/

$Volunteer = "CREATE TABLE Volunteer
(V_Id INT AUTO_INCREMENT,
FirstName VARCHAR(20) NOT NULL,
MidName VARCHAR(20),
LastName VARCHAR(20),
MobileNo VARCHAR(10) NOT NULL,
Email VARCHAR(50) NOT NULL,
Gender VARCHAR (20),
_Address VARCHAR (30),
Locality VARCHAR (50),
PRIMARY KEY (V_Id))";

/*if(!mysqli_query($con,$Volunteer))
{
die(mysqli_error($con));
}*/

$doctors = "CREATE TABLE Doctor
(D_Id INT AUTO_INCREMENT,
FirstName VARCHAR(20) NOT NULL,
MidName VARCHAR(20),
LastName VARCHAR(20),
MobileNo VARCHAR(10) NOT NULL,
Email VARCHAR(50) NOT NULL,
Hospital VARCHAR (50),
Locality VARCHAR (50),
Expertise VARCHAR (30),
PRIMARY KEY (D_Id))";

/*if(!mysqli_query($con,$doctors))
{
die(mysqli_error($con));
}*/

$NGO = "CREATE TABLE NGO
(Registration_no INT ,
NGO_name VARCHAR(50) NOT NULL,
President VARCHAR(50),
Contact VARCHAR(10) NOT NULL,
Email VARCHAR(50) NOT NULL,
Locality VARCHAR (50),
Pincode VARCHAR (10) NOT NULL,
PRIMARY KEY (Registration_no))";

/*if(!mysqli_query($con,$NGO))
{
die(mysqli_error($con));
}*/

$fk = "ALTER TABLE Children
ADD CONSTRAINT fk_ngo
FOREIGN KEY (NGO_no) REFERENCES NGO(Registration_no)";

/*if(!mysqli_query($con,$fk))
{
    die(mysqli_error($con));
}*/

  echo "successful database.";

?>