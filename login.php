<?php

include 'navbar.php';
include 'connect.php';
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
		 	$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			echo "<script>alert('Login sucessfully')</script>";

			 header('refresh:0;url=renting.php');
		 }
		 else
		 {
		 	echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		 header('refresh:0;url=login.php');
		 }


	}

}

?>











<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
<style>
	.tabledesc{
		font-size: 50px;

	}
	.label{
		size: 100px;
	}
	#registerform{
		display: none;
	}
 .inputs{
    width: 250px;
    padding: 6px 8px;
    border-radius: 5px;
 }
 .mybutton{
    width: 100%;
    margin-top: 16px;
    padding: 6px 8px;
    outline: none;
    border: none;
    background: green;
	
 }
 .myframe{
 	margin-top: 100px;
 	border: 2px solid green;
 	width: 400px;
 	padding-top: 24px;
 }
 .table{
 	margin-top: 100px;
 }
</style>
	
</head>
<body>
	
	<center>
	<div id="loginform" class="myframe">
		 <form action="#" method="POST">

		 	<center>
		 		<label class="table" >Email :</label><br>
		 		<input type="text" name="email" class="inputs"><br>
		 		<label>Password :</label><br>
		 		<input type="text" name="password" class="inputs"><br>
                 <button class="btlogin" name="btnlogin" style="margin-top:10px; background-color: green; color:white; width: 150px; border-radius: 80px;"> login</button> 
		 		<button class="mybutton" id="btncallregister">Register</button>
		 	</center>
      
                     </form>
	</div>
	</center>


	<script type="text/javascript">
		
		let loginform = document.getElementById('loginform');
		let registerform = document.getElementById('registerform');
		let btncalllogin = document.getElementById('btncalllogin');
		let btncallregister = document.getElementById('btncallregister');
		btncallregister.addEventListener('click', () =>{
			registerform.style.display = "block";
			loginform.style.display = "none";
			localStorage.setItem("code", 1);
		})

       btncalllogin.addEventListener('click', () =>{
       	registerform.style.display = "none";
			loginform.style.display = "block";
			localStorage.setItem("code", 2);
       })
		
		retainpage();
		function retainpage(argument) {
			// body...
			let page = localStorage.getItem("code");
			console.log(page);
			if (page == 1) {
			registerform.style.display = "block";
			loginform.style.display = "none";	
		}else{
				registerform.style.display = "none";
			loginform.style.display = "block";
		}
		}
		
	</script> 


</body>
</html>