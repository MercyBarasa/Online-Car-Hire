<?php 

include 'connect.php';
error_reporting(0);

session_start();


if (isset($_POST['btnregister'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
	if ($password == $confirmpassword) {
		$sql = "SELECT * FROM register_table WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO register (name, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				

				header('refresh:0;url=login.php');


			
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
				
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>