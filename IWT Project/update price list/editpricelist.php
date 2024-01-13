<?php
$servername="localhost";
$username="root";
$password="";
$database="myshop";

$connection=new mysqli($sername,$username,$password,$database);

$name="";
$type="";
$size="";
$price="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='GET'){

    if(!isset($_GET["id"])){
        header("location:/SWELL-IWT/index.php");
        exit;
    }

    $name=$_GET["name"];

    $sql="SELECT*FROM item WHERE name=$name";
    $result=$connection->query($sql);
    $row=$result->fetch_assoc();

    if(!row){
        header("location/SWELL-IWT/index.php");
        exit;
    }

}
else{

    $name=$_POST["name"];
    $type=$_POST["type"];
    $size=$_POST["size"];
    $price=$_POST["price"];

    do{
        if(empty($name)||empty($type)||empty($size)||empty($price)){
            $errorMessage="All the fields are required";
            break;
        }

        $sql="UPDATE items" .
             "SET name='$name' ,type='$type' ,size='$size' , price='$price' " .
             "WHERE id =$id";

        $result=$connection->query($sql);

        if(!$result){
            $errorMessage="invalid query:" . $connection->error;
            break;
        }

        $successMessage="Item price updated correctly";

        header("location:/SWELL-IWT/index.php");
        exit;
        
    }while(true);

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>SWELL BEACH WEAR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <div class="container my-5">
        <h2>New Item</h2>

        <?php
        if(!empty($errorMessage)){
            echo"
            <div class='alert-warning alert-dismissible fade show'role='alert'>
                 <strong>$errorMessage</strong>
                 <button type='button'class='btn-close'data-bs-dismiss='alert'aria-label='close></button>
            </div>
            ";
        }
        ?>

        <form method="post">
          <input type="hidden" name="name"value="<?php echo $name; ?>" >
          <div class="row mb-3">
            <label class="col-sm-3-col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-sm-3-col-form-label">Type</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="type" value="<?php echo $type;?>">
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-sm-3-col-form-label">Size</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="size" value="<?php echo $size;?>">
            </div>
         </div>
         ;<div class="row mb-3">
            <label class="col-sm-3-col-form-label">Price</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="price" value="<?php echo $price;?>">
            </div>
         </div>

         <?php
         if(!empty($successMessage)){

         }
         ?>

         <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit"class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/SWELL-IWT/index.php"role="button">Cancel>/a>
            </div>
         </div>
       </form>
            

</body>
</html>