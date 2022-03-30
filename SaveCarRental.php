<?php
include'connect.php';
session_start();
if(isset($_POST['submit']))
{
  $target_path = "image";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$model = $_POST['model'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								$description = $_POST['description'];
								$sql = "INSERT INTO cartabledb (image, model,hire_cost,capacity,description,status) 
													VALUES ('$image','$model','$hire_cost','$capacity','$description','Available')";
								$res = $con->query($sql);
								if($res === TRUE){

									
									echo '<script> alert("Car Item Successful Uploaded");</script>';
                header('refresh:0;url=adminlogin.php');
									}
								}
								else {
                  echo '<script> alert("Failed to Uploaded");</script>';

                               }
} 

?> 


