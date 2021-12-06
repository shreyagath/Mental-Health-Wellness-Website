<?php
session_start();
$con = mysqli_connect('localhost','root','','connect',3308); 
if(!$con)
{
    echo "Connection not established...";
    exit();
}
else
{
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username="";
		$password="";
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$query = "select * from user where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['uid'] = $user_data['uid'];
						$_SESSION['username']=$username;
	
						header("Location:..\home.php");
						
					}
				}
			}
			
			echo "<script>alert('Wrong Username or Password!')</script>";
			header("refresh:0;url=../html/login.html");

		}else
		{
			echo "<script>alert('Wrong Username or Password!')</script>";
			header("refresh:0;url=../html/login.html");
		}
	}
}
?>