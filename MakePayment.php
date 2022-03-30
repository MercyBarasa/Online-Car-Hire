<html>
    <head>
        <title>Make Payment </title>
    </head>
    <body>
        <?php include 'navbar.php';?>
    </body>
</html>

<?php  

include 'connect.php';
if(isset($_POST['submit']))
{
    $rent_start_date=$_POST['rent_start_date'];
    $rent_end_date=$_POST['rent_end_date'];
    $type_of_delivery=$_POST['type_of_delivery'];
    $payment=$_POST['payment'];

    $insert="INSERT INTO rent_details(rent_start_date,rent_end_date,type_of_delivery,payment
    )VALUES('$rent_start_date','$rent_end_date',' $type_of_delivery','$payment')";

    $query_result=mysqli_query($con,$insert);
    if($query_result){
        echo "<script>alert('Record submitted succesfuly')</script>";
		// header('refresh:0;url=login.php');
        header('refresh:0;url=MakePayment.php');
    }
    else{

        echo "<script>alert('Record submisssion fails')</script>";
        header('refresh:0;url=renting.php');

    }
    
}


?>
