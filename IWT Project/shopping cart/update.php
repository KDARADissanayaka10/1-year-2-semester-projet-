/*S.S.Peduruarachchige 
    IT21817212
	 Internet and Web Technologies
	 Final Project | Online Fashion store System*/


<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `shopping_cart` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$item_name=$row['item_name'];
$item_code=$row['item_code'];
$qty=$row['qty'];
$price=$row['price'];
$description=$row['description'];

if(isset($_POST['submit'])){
    $item_name=$_POST['item_name'];
    $item_code=$_POST['item_code'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $description=$_POST['description'];

    $sql="update `shopping_cart` set id='$id',item_name='$item_name',
    item_code='$item_code',qty='$qty',price='$price',description='$description' 
    where id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data successful update";
        header('location:display.php');
    }else{
        die(mysqli_error($result));
    }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="styelesheet" href="./index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Shopping Cart</title>
  </head>
    <body>
    <?php require_once(__DIR__.'./navbar.php'); ?>
    <div class="container my-5"> 
        <form method="post">
        <div class="form-group">
             <label>Item Name</label>
             <input type="text" class="form-control" 
             placeholder="Enter your Item name" name="item_name" autocomplete="off">
     </div>
        <div class="form-group">
         <label>Item Code</label>
             <input type="text" class="form-control" 
             placeholder="Enter yor Item code" name="item_code" autocomplete="off">
         </div>
        <div class="form-group">
        <label>Quantity</label>
            <input type="number" class="form-control" 
            placeholder="Enter your quantity" name="qty" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Price Rs.</label>
            <input type="number" class="form-control" 
            placeholder="Price" name="price" autocomplete="off">
  </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" 
            placeholder="Write your description" name="description" autocomplete="off">
  </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


    </div>

    <?php require_once(__DIR__.'./footer.php'); ?>
    </body>
    </html>