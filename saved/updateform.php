<?php
    require_once("connect.php")
?>
<html>
<head>
    <title>Add Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body{       
            background-image:url(screenshot.png);
            background-size:cover;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
<div class="row" style="font-size: large;border: 2px solid black">
                    <?php
                include("nav.html");
                ?>
            </div>
    <div class="row" style="color:black;">
        <?php 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            require_once "connect.php";

            // (global variable) string $query
            $query = "SELECT * FROM products WHERE id = ?";
            $stmt = mysqli_prepare($connect,$query);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $data = mysqli_fetch_assoc($result);

            if ($data) {


                ?>

                <h1>update information</h1>   
            <form action="processupdate.php" method="POST">

           <input type="hidden" name="ID" value="<?php echo $data['ID'];?>">
        
                <div class="form-group">
                    <label>ProductName</label>
                    <input type="text" name="ProductName" class="form-control" placeholder="Give the products name" value="<?php echo $data['ProductName'];?>">
                </div>
        
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="Price" value="<?php echo $data['Price'];?>" >
                </div>
        
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" name="Quantity" value="<?php echo $data['Quantity'];?>" >
                </div>
        
                <div class="form-group">
                    <label>ProductDescription</label>
                    <input type="text" class="form-control" name="ProductDescription" placeholder="Give a description" value="<?php echo $data['ProductDescription'];?>">
                </div>

              
        
                <button type="submit" class="btn btn-primary">Update information</button>
        </form>
        <?php
            }
            else {
               echo ("<p>ID Invalid please try again</p>");

        }}
        ?>
       
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>