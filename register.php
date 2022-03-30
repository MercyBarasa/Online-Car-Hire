<?php include 'navbar.php';?>
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
		display: block;
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
	<div id="registerform" class="myframe">
		<form action="saveUser.php" method="POST">
			   
			   <center>
		 		<label>Name :</label><br>
		 		<input type="text" name="name" class="inputs"><br>
		 		<label>Email :</label><br>
		 		<input type="email" name="email" class="inputs"><br>
		 		<label>Password :</label><br>
		 		<input type="text" name="password" class="inputs"><br>
		 		<label>Confirm password :</label><br>
		 		<input type="text" name="confirmpassword" class="inputs"><br><br>
		 		<button class="btnregister" name="btnregister" style="margin-top:10px; background-color: green; color:white; width: 150px; border-radius: 80px;"> Register</button> 
		 		<button id="btncalllogin" class="mybutton"> Login</button>
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