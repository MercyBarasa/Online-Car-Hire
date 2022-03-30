<?php
include"connect.php";
if(isset($_POST['btnlogin']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * FROM register WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);


	if($result)
	{
		$num=mysqli_num_rows($result);

		 if($num)
		 {
		 	$row = mysqli_fetch_assoc($result);
		 	session_start();
		 	$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			echo "<script>alert('Login sucessfully')</script>";

			header('refresh:0;url=DisplayFood.php');
		 }
		 else
		 {
		 	echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		 header('refresh:0;url=login.php');
		 }


	}
}
?>