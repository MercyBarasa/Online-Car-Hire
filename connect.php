<?php
        $servername="localhost";
	    $username="root";
        $password="";
	    $dbname="CarHireDb";
	$con = new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error){
		die("Connection Failed!".$con->connect_error);
	}
	// else
	// {
	//    echo '<script> alert("Connected successfully");</script>';
	// }
?>