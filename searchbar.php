
<?php
include'connect.php';
$sql="SELECT * FROM cartabledb";

if(isset($_POST["submit"]))

if($model=$_POST['model']){

  $sql="SELECT * FROM cartabledb WHERE model='$model'";

}
elseif($capacity=$_POST['capacity'])
{
  //  
  //  $model=$_POST['model'];
   
    $sql="SELECT * FROM cartabledb WHERE capacity='$capacity'";

   
   
}
elseif($hire_cost=$_POST['hire_cost'])
{
  //  
  //  $model=$_POST['model'];
   
    $sql="SELECT * FROM cartabledb WHERE hire_cost='$hire_cost'";

   
   
}
else{
       $sql="SELECT * FROM cartabledb";
}

		
$stmt=$con->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Hire Online System</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>



 
 <form method="POST">
 <div><!-- Search Bar -->
 <div class="row" style="margin-top:5px; margin-left:30px; margin-right: 30px;">
    <div class="col" style="margin-right: 20px;">
    	<label>Price</label>
      <input type="text" class="form-control" name="hire_cost"  style="width:200px;">
    </div>
   <div class="col">
    	<label>Model</label>
      <input type="text" class="form-control" name="model" style="width:200px; ">
    </div> 
    <div class="col">
    	<label>Seating  Capacity</label>
      <input type="text" class="form-control" name="capacity" style="width:200px;">
    </div>
 
     <div class="col">
      <button type="submit" class="form-control" name="submit" style="width:150px; background-color: #1aa5bd; color:white; margin-top:30px;">Search</button> 
      <!-- <input type="submit" name="submit"> -->
    </div>
  </div> 
</div>
 <!-- <div class="container">
 <div class="row" style="padding-top: 20px; margin-top: 0px;">
  		<?php
     

       while($row=$result->fetch_assoc()):

  		?>
  		<div class="col-lg-3">
  			<div class="card-deck">
  				<div class="card p-2 border-secondary mb-2">
  					<a href="book_car.php?id=<?php echo $row['id']?>">
  					<img src="image/<?=$row['image']?>" class="card-img-top"   height="250">
  					<div class="card-body p-1">
  						  <h4 class="card-title text-center text-info"><?= $row['model'] ?> </h4>
  						  <h5 class="card-text text-center text-danger">Ksh.&nbsp;&nbsp;<?= number_format($row['hire_cost'],2) ?>/-</h5>
  					</div>
  				</div>
  			</div>
  		</div>
  	  <?php endwhile;?>
  	</div> -->

</form>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
</html>