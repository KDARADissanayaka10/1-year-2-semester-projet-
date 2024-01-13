/*S.S.Peduruarachchige 
    IT21817212
	 Internet and Web Technologies
	 Final Project | Online Fashion store System*/


<?php

include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
     integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

     <link rel="stylesheet" href="./index.css">

</head>
<body>



<?php require_once(__DIR__.'./navbar.php'); ?>

    <div class="container">
        <div class="area">
        <div class="text-right my-5">
        <button class="btn btn-primary" > <a href="user.php"
    class="text-light">Add Item</a>
    </button>
    </div>
   
  
    <?php 
        $sql="Select * from `shopping_cart`";
        $result=mysqli_query($con,$sql);
        if($result){
           while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $item_name=$row['item_name'];
            $item_code=$row['item_code'];
            $qty=$row['qty'];
            $price=$row['price'];
            $description=$row['description'];
            echo '

    <div class="card p-5 mb-5">
        <div class="row">
         <div class="col-md-8">
            <p style="font-weight:bold;font-size:28px"> Item Name :<h3 style="font-weight:bold;font-size:23px">'.$item_name.'</p>
            <p style="font-weight:bold;font-size:28px"> Item Code :<h3 style="font-weight:bold;font-size:23px">'.$item_code.'</p>
            <p style="font-weight:bold;font-size:28px"> Quantity :<h3 style="font-weight:bold;font-size:23px">'.$qty.'</p>
            <p style="font-weight:bold;font-size:28px"> Price : <h3 style="font-weight:bold;font-size:23px">'.$price.'</p>
            <p style="font-weight:bold;font-size:28px"> Description : <h3 style="font-weight:bold;font-size:23px">'.$description.'</p>

            <div class="text-right">
                <div class=" mt-3">
                 <a href="update.php? updateid='.$id.'"
                 class="text-success"><i class="fa-solid fa-pen-to-square fa-2x mr-5"></i></a>
                 <a href="delete.php? deleteid='.$id.'" 
                 class="text-danger"><i class="fa-solid fa-trash fa-2x"></i></a>
                 
                 </div>
            </div>
        </div>  
        <div class="col-md-4">
        <img src="./img/item.jpg" class="img-fluid">
        </div>
        </div>  
    </div>
              
             ';
            }
           
            
        }

    ?>
        </div>
        
    
    </div>
    <?php require_once(__DIR__.'./footer.php'); ?>
   
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>