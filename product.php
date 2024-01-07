<?php

require_once('fetchingdata/db.php');
$query = "select + from products";
$result = mysqli_query($data,$query);

?>
<html >
<head>
    <title>Fetch data </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-image:url(p5.png);
            background-size:cover;
            color: white;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
          <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">Fetch data from database to php</h2>
                </div>
                <div class="card-body">
            <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                    <td> ID</td>
                    <td>ProductName</td>
                    <td>Price</td>
                    <td>Quantity ID</td>
                    <td>ProductDescription</td>
                </tr>
                <tr>
                   <?php
                    while($row = mysqli_fetch_assoc($result))
                     {
                    ?>
                </tr>
                    <?php
                    }

                   ?>
               <td><?php echo $row['ID'] ?></td>
               <td><?php echo $row['ProductName'] ?></td>
               <td><?php echo $row['Price'] ?></td>
               <td><?php echo $row['Quantity'] ?></td>
               <td><?php echo $row['ProductDescription'] ?></td>

            </table>
                </div>
            </div>
          </div>
        </div>
    </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


