
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Rent the car Now</title>
  <!-- <div class="col-2"><a href="logout.php">Log Out as <?php session_start(); echo $_SESSION['name'];?></a></div> -->

</head>

<body>


	<div class="container" style="width:50%;">
		<form action="saverent.php" method="POST" class="login-email" >
			<p class="login-text" style="font-size: 2rem; font-weight: 8000;">Rent the car Now</p>
			
            <?php $today = date("Y-m-d") ?>
          <label><h5> Select Start Date: &nbsp;<input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">
</h5></label>
            &nbsp; 
          <label><h5>  Select End  Date: &nbsp; <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">
 </h5> </label>
          <br>

          

          <br>

            <label for="">Select the means of delivery</label>
            <select class="form-select" name="type_of_delivery" aria-label="Default select example">
               
                
                <option value="delivered">Delivered</option>
                <option value="station">pick at the Nearest Sation</option>
               
            </select>

            <br><br>

<label for="">Select the means of delivery</label>
<select class="form-select"  name="payment" aria-label="Default select example">
    
    <option value="mpesa">Mpesa</option>
    <option value="card">Card</option>             
    <option value="paypal">Paypal</option>
   
</select>
            <br><br>
               
            </select>

            <input type="submit"name="submit" value="Submit Now" style=" background-color:white; color:"> 

        
		</form>
	</div>
</body>
</html>