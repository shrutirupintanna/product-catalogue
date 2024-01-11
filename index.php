
<?php
    require_once("connect.php");
    $query = "SELECT * FROM products";
    $result = mysqli_query($connect,$query);

?>
<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
       body {
            background-image:url(images/p1.png);
            background-size:cover;
            color:white;
        }
        .card {
            color:white;
            background-image:url(images/p1.png);
        }
      </style>
       
    </head>
    <body>
        <div class="container-fluid" >
    
            <div class="row" style="font-size: large;border: 2px solid black">
                    <?php
                include("nav.html");
                ?>
            </div>

           
            <div class="row">
                <div class="col-lg-4">
                    <?php
                    include("cardsforhome/card.html")
                    ?>
                    
                </div>

                <div class="col-lg-4">
                <?php
                    include("cardsforhome/card1.html")
                    ?>
                   <p>In our stock we provide all electric items<br />Below are common electronics in our store</p>
                    <p>Smart tvs,watches,phones<br />Fridges<br />Irons<br />Washing machines<br />and much more</p>
               
                </div>

                <div class="col-lg-4">
                    <?php
                        include("cardsforhome/card2.html")
                        ?>
                    <p>We deal with the following electric companies ;</p>
                   <p>HISENSE<br />SAMSUNG<br />APPLE<br />hp<br />VIVO<br />...</p> </p>
                    
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <?php
                    include("cardsforhome/card3.html")
                    ?>
                    <p>In stationary,<br />we provide all stationary products <br />as shown </p>
                </div>

                <div class="col-lg-4">
                <?php
                    include("cardsforhome/card4.html")
                    ?>
                   <p>Our products are imported </p>
                </div>

                <div class="col-lg-4">
                    <?php
                        include("cardsforhome/card5.html")
                    ?>
                    <p>
                        In clothings we provide
                        woolen
                        silk
                        cotton clothings etc
                    </p>
                    
                </div>

            </div>


            <div class="row">
                <div class="col-lg-4">
                        <?php
                        include("cardsforhome/card6.html")
                        ?>
                    <p>In jellwery we provide quality plastic products with different colors and designs</p> 
                </div>

                <div class="col-lg-4">
                <?php
                    include("cardsforhome/card7.html")
                    ?>
                <p> we also provide wall decorators</p>
                </div>

                <div class="col-lg-4">
                    <?php
                        include("cardsforhome/card8.html")
                        ?>
                <p>These came in different colors and designs</p>
                
                </div>
            </div>
            <div class="row">
            <div class="col-lg-4" class=".image">
                    <?php
                        include("cardsforhome/card9.html")
                    ?>
            </div>
            <div class="col-lg-4" class=".image">
            <p>we have paintings as wall decorators too </br> the above mountain is on an island 
            </br> It is a beacon of mordern luxury,located in the island</p>
            </div>


            </div>


            <div class="row">
                <?php

                    function displayCurrentDateTime() {
                    
                        date_default_timezone_set('Africa/Nairobi');

                        $currentDateTime = date('Y-m-d H:i:s');

                        echo "Current Date and Time: " . $currentDateTime;
                    }

                    displayCurrentDateTime();

                    ?>

            </div>
          
            <div class="row"> 
                <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {  
                ?>
                <div class="col-lg-4 mb-4">
                    <div class="card" >
                        <div class="card-header">
                            <?php echo $row['ID'];?>
                        </div>

                        
                        <div class="card-body">
                        <p class="card-text"><p><b>Product name</b></p> <?php echo $row['ProductName'];?></p>
                        </div>

                        <div class="card-body">
                        <p class="card-text"> <p><b>Price</b></p><?php echo $row['Price'];?></p>
                        </div>

                        <div class="card-body">
                        <p class="card-text"><p><b>Quantity</b></p> <?php echo $row['Quantity'];?></p>
                        </div>

                        <div class="card-body">
                        <p class="card-text"><p><b>Product description</b></p> <?php echo $row['ProductDescription'];?></p>
                        </div>


                    </div>
                </div>

                <?php
                    }
                ?>
            </div>
       
           
        <div class="row" style="border: 1px solid blue">
            <marquee direction="left"><p style="font-size: large;color:white ;"><b>This website is maintained and managed by the head of product-cataloque<br />
            for more information please contact us using the details in the contact page</b></p>
            </marquee>     
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>