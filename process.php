<?php
    require_once("connect.php");

    $name=$_POST['ProductName'];
    $price=$_POST['Price'];
    $quantity=$_POST['Quantity'];
    $description=$_POST['ProductDescription'];

    $query = "INSERT INTO products (ProductName,Price,Quantity,ProductDescription) VALUES(?,?,?,?)";

    $statement= mysqli_prepare($con , $query);

    mysqli_stmt_bind_param($statement,"ssss",$name,$price,$quantity,$description);

    if(mysqli_stmt_execute($statement)){
    header("Location:  /services.php");
    }
    else{
        die("Execute failed;" .mysqli_error($connect));
    }
    
   
?>