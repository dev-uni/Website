<?php
$conn_error = 'could not connnect';
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "book";
$con=mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);
//mysql_select_db($mysql_db) or die($conn_error);

 
mysql_select_db("book", $con);
$Firstname=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$username=$_POST['username'];
$Password=$_POST['Password'];
$day =$_POST['DOB'];
$month=$_POST['DOB'];
$year=$_POST['DOB'];
$Email=$_POST['Email'];
$question=$_POST['question'];
$answer=$_POST['Answer'];
 	$sql="INSERT INTO signup (Name, Password, Address, Email)
 			VALUES ('$Username','$Password','$Address','$Email')";
			mysql_query($sql);
if(!mysql_query($sql,$con))
{
//echo 'Sign up successful';
header('location:index.html ');
}else{
$error1="Failed! Please sign up again";
}

?>