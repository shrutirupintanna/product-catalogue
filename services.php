<?php

require_once('fetchingdata/db.php');
$query = "select *  from products";
$result = mysqli_query($con,$query);

?>
   <html>
        <head>
            <title>index page.</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <style>

            body{       
            background-image:url(p2.png);
            background-size:cover;
            color: white;
        }


        #image{
            align:"center"
        }        
            
        </style>
        </head>
        <body >
            <div class="container">
                <div class="row">
                        <?php
                    include("nav.html");
                    ?>
                </div>
            
                <div class="row" style="font-size: large;border: 2px solid black">
                    <p>Below are services we provide</p>
                    <div class="col-lg-4" class="position">
                            Online services
                            <img src="online.png" id="image"  class="img-fluid">
                            <p>Our products come from various places in the world </p>
                    </div>

                    <div class="col-lg-4" class="position">
                            Delivery services
                            <img src="deliveryservices.png" id="image" class="img-fluid">
                            <p>As our stock has different variourity products you have different choises</p>

                    </div> 
                    <div class="col-lg-4" class="position">
                    Offers,waranty services and discounts are also available  
                                <img src="image1.jpg" class="img-fluid" >
                            <p>We provide the best quality products<br />
                            in all catagories e.g electronics,grocery and more </p>
                           
                            
                           
                    </div> 

                </div>
                <div class="row mt-5">
          <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center bg-dark">Fetch data from database to php</h2>
                </div>
                <div class="card-body">
            <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                    <td> ID</td>
                    <td>ProductName</td>
                    <td>Price</td>
                    <td>Quantity ID</td>
                    <td>ProductDescription</td>
                    <td>Action</td>
                   
                </tr>
                <tr>
                   <?php
                    while($row = mysqli_fetch_assoc($result))
                     {
                    ?>
                     <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['ProductName'] ?></td>
                    <td><?php echo $row['Price'] ?></td>
                    <td><?php echo $row['Quantity'] ?></td>
                    <td><?php echo $row['ProductDescription'] ?></td>
                  
                    <td>
                        <a href="updateform.php?id='<?php $row['ID'];?>'">Update data</a>
                    <a href="updateform.php?id='<?php $row['ID'];?>'">Delete</a>
                </td>

                </tr>
                    <?php
                    }

                   ?>
              
            </table>
                </div>
            </div>
          </div>
        </div>
            
                
                <div class="row" style="border: 1px solid blue">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in the contact page</b></p>
                   </marquee>     
                </div>

            </div>
            <script src="js/bootstrap.min.js"></script>
        </body>
    </html>
            