<?php
    require_once("connect.php");

    $name=$_POST['ProductName'];
    $price=$_POST['Price'];
    $quantity=$_POST['Quantity'];
    $description=$_POST['ProductDescription'];

    $query = "INSERT INTO products (ProductName,Price,Quantity,ProductDescription) VALUES(?,?,?,?)";

    $statement= mysqli_prepare($con , $query);

    mysqli_stmt_bind_param($statement,"ssss",$name,$price,$quantity,$description);

    mysqli_stmt_execute($statement);
    echo "data submitted successfully";
?>