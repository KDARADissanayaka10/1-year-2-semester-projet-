/*S.S.Peduruarachchige 
    IT21817212
	 Internet and Web Technologies
	 Final Project | Online Fashion store System*/



<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `shopping_cart` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
     //echo "Delete successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>