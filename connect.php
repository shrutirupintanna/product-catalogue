<?php
        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_password='';
        $database='productcatalogue';

$connect = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);

if($connect) {
    echo ("connection successfully connected ");
}
    else {
        die("connection failed" . mysqli_error($connect));
    }

?>