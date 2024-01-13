<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>SWELL GEAR WEAR </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Items</h2>
        <a class ="btn btn-primary" herf="/SWELL-IWT/create.php" role="button">New Item></a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Item code</th>
                    <th>Item name</th>
                    <th>Item type</th>
                    <th>Item size</th>
                    <th>Item price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername="localhost";
                $username="root";
                $password="";
                $database="SWELL-IWT";

                $connection = new mysqli($servername,$username,$password,$database);

                if($connection->connect_error){
                    die("connection failed: ".$connection->connect_error);
                }

                $sql="SELECT*FROM Items";
                $result =$connection->query($sql);

                if($result){
                    die("Invalid query:".$connection->error);
                }

                while($row=$result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[itemcode]</td>
                    <td>$row[itemname]</td>
                    <td>$row[itemtype]</td>
                    <td>$row[itemsize]</td>
                    <td>$row[itemprice]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/SWELL-IWT/edit.php?id=$row[itemcode]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/SWELL-IWT/delete.php?id=$row[itemcode]'>Delete</a>
                    </td>
                </tr>
                ";
                }
                ?>

                
            <tbody>
        </table>
    </div>

</body>
</html>
