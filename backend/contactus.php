<?php 

session_start();
$con=mysqli_connect("localhost","root","","contact",3308) or die(mysqli_error($con));

	$Fname="";
	$Lname="";
	$Phone="";
	$Address="";
	$Email="";
	$Message="";

	$Fname = $con->real_escape_string($_POST['firstname']);
	$Lname = $con->real_escape_string($_POST['lastname']);
	$Phone = $con->real_escape_string($_POST['phone']);
	$Address = $con->real_escape_string($_POST['address']);
	$Email = $con->real_escape_string($_POST['email']);
	$Message = $con->real_escape_string($_POST['message']);

	$sql="INSERT INTO contactus (firstname, lastname, phone,address,email,message) VALUES
	('$Fname','$Lname','$Phone','$Address','$Email','$Message')";
	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		echo "<script>alert('Thank you! Your message has been submitted.')</script>";
		header("refresh:0;url=../html/contactus.html");
	}
	else
	{
		echo "<script>alert(Couldn't submit. Please try again later')</script>";
	}

?>