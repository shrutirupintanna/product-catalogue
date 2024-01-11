<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")  {

        require_once("connect.php");
       $query = "UPDATE products SET ProductName = ?, Price = ?, Quantity = ?,ProductDescription = ? WHERE ID=?";

       $stmt = mysqli_prepare($connect, $query);

       $id = $_POST["ID"];
       $pro = $_POST["ProductName"];
       $price = $_POST["Price"];
       $quantity = $_POST["Quantity"];
       $prod = $_POST["ProductDescription"];

       mysqli_stmt_bind_param($stmt,"ssssi" ,$pro,$price,$quantity,$prod , $id);
        mysqli_stmt_execute($stmt);
    }

    else {
        die("Execute failed:" . mysqli_error($connect));

    }
    header("Location: services.php")
?>