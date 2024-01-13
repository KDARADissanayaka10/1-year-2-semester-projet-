/* S.S.Peduruarachchige 
	 IT21817212
	 Internet and Web Technologies
	 Final Project | Online Fashion store System	*/




<?php
$con=new mysqli('localhost','root','',
'swell');

if(!$con){
    echo "connection is successfull";
    die(mysqli_error($con));
}
?>