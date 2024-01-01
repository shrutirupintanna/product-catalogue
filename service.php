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

        img {
                width:500px;
                border-radius:50px;
                float:right;
                margin-right:10px;
        }

        #image{
            align:"center"
        }        
            
        </style>
        </head>
        <body >
            <div class="container">
                <div class="row" style="font-size: large;border: 2px solid black">
                        <?php
                    include("nav.html");
                    ?>
                </div>
            
                <div class="row" style="font-size: large;border: 2px solid black">
                    <p>Below are services we provide</p>
                    <div class="col-lg-4" class="position">
                            Online services
                            <img src="online.png" id="image" >
                    </div>

                    <div class="col-lg-4" class="position">
                            Delivery services
                            <img src="deliveryservices.png" id="image">
                    </div> 
                    <div class="col-lg-4" class="position">
                            Offers,waranty services and discounts are also available  
                    </div> 

                </div>
            
                <img src="image1.jpg" >
                <p>We provide the best quality products<br />
                 in all catagories e.g electronics,grocery and more </p>
                <p>Our products come from various places in the world </p>
                <p>As our stock has different variourity products you have different choises</p>

                <div class="row">
                <div class="row" style="border: 1px solid blue">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in the contact page</b></p>
                   </marquee>     
                    </div>
                </div>

            </div>
        </body>
    </html>
            