<?php

include 'connect.php';
session_start();


if(isset($_POST['submit']))
{
    $rent_start_date=$_POST['rent_start_date'];
    $rent_end_date=$_POST['rent_end_date'];
    $type_of_delivery=$_POST['type_of_delivery'];
    $payment=$_POST['payment'];
   // $carid=	$_SESSION['card'];

    $start = new DateTime ($rent_start_date);
    $end = new DateTime($rent_end_date);
    $diff =  $start->diff($end);
    $days=$diff->format('%d days');
    $hirecost=8000;
    //select car daily charge for the vehicle
    //assign a variable to the cost
    // SELECT hire_cost FROM `cartabledb` WHERE  `id`=20
    //calculate the total cost
$totalcost=$hirecost*$days;



    $insert="INSERT INTO rent_details(rent_start_date,rent_end_date,type_of_delivery,payment,days
    )VALUES('$rent_start_date','$rent_end_date',' $type_of_delivery','$payment','$days')";

    $query_result=mysqli_query($con,$insert);
    if($query_result){
        echo "<script>alert('Record submitted succesfuly')</script>";
		
          if($payment=='mpesa'){
            header('refresh:0;url=mpesa.php');

      }
           else  if($payment=='card')
           {
             header('refresh:0;url=card.php');
       }
           else if($payment=='paypal')
         {
               header('refresh:0;url=Paypal.php');
           }
    //      else{
    
    //          echo "<script>alert('wrong selection')</script>";
    //        header('refresh:0;url=renting.php');
    
    //      }
    //     // header('refresh:0;url=MakePayment.php');
     }
    else{

        echo "<script>alert('Record submisssion fails')</script>";
        header('refresh:0;url=renting.php');

    }



  

   
   
    
}


?>