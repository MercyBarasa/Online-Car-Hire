<?php 
session_start();
if(isset($_POST['btnlogin']))
{
	$carid=$_POST['email'];
	$_SESSION['carid'] = $carid;
			

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Book Car Now</title>
</head>
<body>
  <section>
   <?php include'navbar.php';?>
  </section>
    <div class="container py-5" style="margin-left: -250px;">
        <div class="row">
            <?php
       include 'connect.php';
       $stmt=$con->prepare("SELECT * FROM cartabledb  WHERE id='$_GET[id]'");
       $stmt->execute();
       $result=$stmt->get_result();
       while($row=$result->fetch_assoc()):

      ?>
      <div style="width:80%; margin-left: 20px;">
            <div class="col-md-5 mx-auto b Capacityg-white shadow border p-4 rounded">
                <h2 class="text-center fw-bold mb-3">Book The Car Now</h2>
                <a href="book_car.php?id=<?php echo $row['id']?>">
              
            <img src="image/<?=$row['image']?>" class="card-img-top" height="250">
            
          
                
            </div>
      </div>  


            <table class="form-control" style="margin-left: 700px; width: 50%; margin-top: -340px; border: 0px;">
              <tr>
                <p><td><label style="color:#1aa5bd">Price</label></td></p>
              </tr>
              <tr> 
                <td><input type="text" value="<?=$row['hire_cost'];?>"></td>
              </tr>

              <tr>
                <td><label style="color:#1aa5bd">Model</label>
                <label style="color:#1aa5bd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seating Capacity</label></td>
              </tr>
              <tr>
                <td style="justify-content: space-around;">
                 <input type="text" value="<?=$row['model'];?>">
                <input type="text" value="<?=$row['capacity'];?>"></td>
             </tr>
             
              <tr>
                <td><label style="color:#1aa5bd">Description</label>
                <br>
                <!-- <textarea rows="3" cols="50" name="" form="usrform"  ></textarea>  -->
               <input type="text"  value="<?=$row['description'];?>" style="width: 390px; height: 80px;">

                </td>
             </tr>
             <tr >
               <!-- <td  a class="link" href="login.php"><input type="submit" name="submit" value="Rent this Vehicle" onClick="parent.location='login.php'" style="background-color:#1aa5bd; margin-left: 253px; color: white;"></a></td> -->
              <td class="link"><input type="submit" name="rent" style="background-color:#1aa5bd; margin-left: 253px; color: white;">  <a href='login.php'>
        <button class="GFG">
            Rent This Vehicle
        </button>
    </a>
       </td>
             </tr>
              

            </table>

             <?php endwhile;?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>