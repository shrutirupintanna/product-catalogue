<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
       
    </head>
    <body>
        <div class="container">
            <div class="row" style="font-size: large;border: 2px solid black">
                    <?php
                include("nav.html");
                ?>
            </div>

            <div class="row" style="font-size: large;border: 2px solid black">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" class="img-fluid">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image1.jpg" alt="image1" />
                            </div>

                            <div class="carousel-item">
                                <img src="image2.png" alt="image2" />
                                
                            </div>
                           
                            <div class="carousel-item">
                                <img src="image3.jpg" alt="image4" />
                                
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
            
            </div>
            </div>

            <div class="row" style="font-size: large;border: 2px solid black">
            <marquee direction="left"><p style="font-size: large; ;"><b>We provide the best quality products and services</b></p>
                   </marquee>
            </div>
            
        </div>
    </body>
</html>
           

