<?php

$dbhost = "localhost";
$dbuser = "root";
$dbaddress = "";
$dbphone_number = "";
$dbe_mail = "";
$dbpassword = "";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbaddress,$dbphone_number,$dbe_mail,$dbpassword,$dbname))
{

    die("failed to connect")
}