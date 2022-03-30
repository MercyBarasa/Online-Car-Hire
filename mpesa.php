
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lipa na Mpesa Online</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="payment/css/main.css">

</head>
<body>

<?php  


?>
	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="lipaOnline.php" method="post">
					<span class="contact2-form-title">
						Make a Payment
					</span>

					<div class="wrap-input2 validate-input" data-validate="Amount is required">
						<input class="input2" type="number" name="amount"> 
						
						<span class="focus-input2" data-placeholder="AMOUNT"></span>
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid phone number is required: 07XXXXXXXX">
						<input class="input2" type="tel" name="phone">
						<span class="focus-input2" data-placeholder="MPESA PHONE NUMBER TO MAKE PAYMENT"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Complete Payment
							</button>
                           
						</div>
                        <div>
                        <button class="cancelbgtn">
								Cancel Payment
							</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>




	

</body>
</html>
