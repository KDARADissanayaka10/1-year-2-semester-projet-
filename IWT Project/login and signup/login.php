<?php 
  include 'connection.php';
  ?>
 
 <!DOCTYPE html>
 
<meta charset="UTF-8">
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

<title>Login</title>

<link rel = "stylesheet" href = "registration.css">
</head>

<body>

</header>

<div class = "heading">
<h1> Log In </h1>
<div>

<div class = "form" align = "center">
<form method="post">

<fieldset >

<label for = "email"> E-mail </label><br>
<input type = "email" id = "mail" name = "mail" required> 

<br><br><br>

<label for = "pword"> Password </label><br>
<input type = "password" id = "pword" name = "pword" required>

<br><br><br>

<a href = "#"><input type = "submit" label = "log in" name = "submit"></a>
</form>
<br><br><br>

<div class = "left">
<a href = "#"> Forgot username or password? </a>
</div>


<div class = "right">
<a href = "C:\Users\User\Desktop\iwt\SWELL\sign up\sign up.html"> New user? Sign up. </a>
</div>

</fieldset>
</form>

<div class = "clear"> &nbsp; </div>
</body>
<?php
	 if(isset($_POST['submit'])){
		$sql = "SELECT * FROM user WHERE email = '$_POST[mail]' AND  password = '$_POST[pword]';";
		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) == 0){
			echo "<script>
			 alert('username or password mismatched);
			 </script>";
		}
		else{
			$_SESSION['login_user'] = $_POST['username'];
			header("location:home.php");
		}
	 }
?>
</html>