<!DOCTYPE html>
<html>
<!-- <?php 
include'connect.php';
//  include('session_customer.php');
/*if(!isset($_SESSION['login_customer'])){
    session_destroy();
    header("location: customerlogin.php");
}*/
?>  -->
<title>Book Car </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/custom.js"></script> 
 <link rel="stylesheet" type="text/css" media="screen" href="assets/clientpage.css" />
</head>
<body ng-app=""> 


    <?php include 'navbar.php';?>
    
<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="bookingconfirm.php" method="POST">
        <br style="clear: both">
          <br>

       

          <!-- <div class="form-group"> -->
              <h5>Car Model:&nbsp;</h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <!-- <h5> Number Of Passengers:&nbsp;<b> <?php echo(capacity);?></b></h5> -->
          <!-- </div>      -->
        <!-- <div class="form-group"> -->
        <label><h5>	choose	delivery destination:</h5></label>

<select>
    <option>Bomet</option>
    <option>Litein</option>
    <option>Kericho</option>
   
</select>
        <label><h5>Select Date of delivery: &nbsp;</h5></label><br>
        <?php $today = date("Y-m-d") ?>
          <label><h5>Start Date:</h5></label>
            <input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">
            &nbsp; 
            <br>
          <label><h5>End  Date: &nbsp; </h5></label>
          <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">
        <!-- </div>      -->
    
            <br><br>


            <!-- <h2> days calculations</h2> -->

                                <?php

                                // Function to find the difference
                                // between two dates.
                                function dateDiffInDays($date1, $date2)
                                {
                                    // Calculating the difference in timestamps
                                    $diff = strtotime($date2) - strtotime($date1);

                                    // 1 day = 24 hours
                                    // 24 * 60 * 60 = 86400 seconds
                                    return abs(round($diff / 86400));
                                }

                                // Start date
                                $date1 = "17-09-2018";

                                // End date
                                $date2 = "31-09-2018";

                                // Function call to find date difference
                                $dateDiff = dateDiffInDays($date1, $date2);

                                // Display the result
                                // printf("Difference between two dates: "
                                //     . $dateDiff . " Days ");
                                //     echo $dateDiff;
                                ?>



 
               <!-- <h3<label>>Number of Days hired</label></h3> -->
           
              <h5> Number of Days hired:&nbsp;<b> <?php echo( $dateDiff);?></b></h5>
             

                <!-- <form class="form-group"> -->
                <label><h5>Select Mode Payement:</h5></label>

                <select>
                    <option>Mpesa</option>
                    <option>Card</option>
                    <option>Paypal</option>
                   
                </select>
                
                <!-- <select name="driver_id_from_dropdown" ng-model="myVar1">
                         <?php
                        // $sql2 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        // $result2 = mysqli_query($conn, $sql2);

                        // if(mysqli_num_rows($result2) > 0){
                        //     while($row2 = mysqli_fetch_assoc($result2)){
                        //         $driver_id = $row2["driver_id"];
                        //         $driver_name = $row2["driver_name"];
                        //         $driver_gender = $row2["driver_gender"];
                        //         $driver_phone = $row2["driver_phone"];
                    ?>
  
                    <!-- <option value="<?php echo($driver_id); ?>"><?php echo($driver_name); ?> -->
                   

                   
                  
                        <?php
                    
                    ?> 
                </select> 


  
                <!-- </form> -->
                <div ng-switch="myVar1">
                

                <?php
                        // $sql3 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        // $result3 = mysqli_query($con, $sql3);

                        // if(mysqli_num_rows($result3) > 0){
                        //     while($row3 = mysqli_fetch_assoc($result3)){
                        //         $driver_id = $row3["driver_id"];
                        //         $driver_name = $row3["driver_name"];
                        //         $driver_gender = $row3["driver_gender"];
                        //         $driver_phone = $row3["driver_phone"];

                ?>

                <!-- <div ng-switch-when="<?php echo($driver_id); ?>">
                    <h5>Driver Name:&nbsp; <b><?php echo($driver_name); ?></b></h5>
                    <p>Gender:&nbsp; <b><?php echo($driver_gender); ?></b> </p>
                    <p>Contact:&nbsp; <b><?php echo($driver_phone); ?></b> </p>
                </div>
                ?>
                </div> -->
                <!-- <input type="hidden" name="hidden_carid" value="<?php echo $car_id; ?>"> -->
                
         
            <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right"> 
        </form>
        
      </div>
     
    </div>

    <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Note:</strong> You will be charged with extra <span class="text-danger">Rs. 500</span> for each day after the due date ends.</h6>
        </div>

</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?>Car Rentals</h5>
                </div>
            </div>
        </div>
    </footer>
</html>