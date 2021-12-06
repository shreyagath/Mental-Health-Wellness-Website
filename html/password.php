<?php
session_start();
$con = mysqli_connect('localhost','root','','connect',3308); 
if(!$con)
{
    echo "Connection not established...";
    exit();
}


		$username="";
		$password="";
		$npass = "";
		$cpass = "";
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$npass = $_POST['npass'];
		$cpass = $_POST['cpass'];
		
		
if($npass!=$cpass)
{
	echo "<script>
		  alert('You have entered wrong passsword during confirmation')
		  </script>";
	header("refresh:0;url=../html/password.html");
}

else
{
		
		$query="SELECT * from user WHERE username='$username' AND password='$password'";
		//$result = mysqli_query($con,$query);.
		$num=mysqli_fetch_array (mysqli_query($con,$query));

		if(is_array($num))
		{
			$new=mysqli_query($con,"UPDATE user set password='$npass' WHERE username='$username'");
			// echo"successful";
			echo "<script>alert('Your Password is changed successfully')</script>";
			header("refresh:0;url=../html/password.html");	
		}
		else
		{
			echo "<script>alert('Sorry.. Couldn't change your password.')</script>";
		}
	
}
?>