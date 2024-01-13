<?php
if(isset($_GET["name"])){
    $name=$_GET["name"];

    $servername="localhost";
    $username="root";
    $password=""
    $database="SWELL-IWT";

    $connection=new mysqli($servername,$username,$password,$database);

    $sql="DELETE FROM item WHERE name=$name";
    $connection->query($sql);
}

header("location:/SWELL-IWT/index.php");
exit;


?>