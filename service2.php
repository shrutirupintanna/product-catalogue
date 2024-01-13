<?php

    require_once('connect.php');
    $query = "SELECT *  FROM contant";
    $result = mysqli_query($connect,$query);

?>
   <html>
        <head>
            <title>index page.</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <style>
            body{       
            background-image:url(images/p2.png);
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
                            <td>Name</td>
                            <td>Email</td>
                            <td>Telephone</td>
                        </tr>
                        <tr>
                            <?php
                              while ($row = mysqli_fetch_assoc($result))
                              {
                                ?>
                            <td><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['Nameyour'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Telephone'] ?></td>
                            <td><button><a href="updateform.php?id=<?php echo $row['ID'];?>">Update Data</a></button></td>

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
            