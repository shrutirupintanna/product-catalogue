<?php
        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_password='';
        $database='productcatalogue';

$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);

if($con) {
    echo ("connection successfully connected")

    else 
        echo ("connection failed")
    }
?>