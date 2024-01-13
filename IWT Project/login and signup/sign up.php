<?php

  include("connection.php");
  include("functions.php");
 
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    //something was posted
    $user_name= $_POST['user_name']
    $password= $_POST['password']
    if(!empty( $user_name)) && (!empty($password ) && !is_numeric($user_name))
    {
        //save ta data base
         $_user_id=random_num(20);
         $query = "insert into users(user_id,user_name,address,phone_number,e_mail,password) valuse('$_user_id','$user_name','$address','$phone_number','$e_mail','$password')"
         mysqli_query(&con,$query);
         header("Location: login.php")
    }else
    {
        echo"please enater some valid information";
    }
 }
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" href = "./style.css">
    </head>
    <body>
    
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
  <center>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</label></b></label><br>
    <input type="text" placeholder="Enter Name" name="name" required><br><br>

    <label for="address"><b>Address</label></b></label><br> 
    <input type="text" placeholder="Enter Address" name="address" required><br><br>

    <label for="number"><b>Mobile Number</b></label><br>
    <input type="text" placeholder="Enter Number" name="number" required><br><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br>
   

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button id = "btn1"type="button" class="cancelbtn">Cancel</button>
      <button id = "btn2"type="submit" class="signupbtn">Sign Up</button>
    </div>
    </center>
</div>
</div>
  
</form>

    </body>