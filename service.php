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
                    
                    <div class="col-lg-4">
                            
                    </div> 
                    
                </div>
            
                <img src="image1.jpg" >
                <p class="username">@shrutitanna</p>
                <p class="one"> I love to learn </p>

            </div>
        </body>
    </html>
            