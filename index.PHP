<html>
    <head>
        <title>About page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <div class="row" style="font-size: large;border: 2px solid black">
                    <?php
                include("nav.html");
                ?>
            </div>
            <div class="row" style="border: 1px solid blue">
                <div class="col-lg-4" style="border: 1px solid black">

                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image1.jpg" alt="image1" />
                            </div>

                            <div class="carousel-item">
                                <img src="image2.png" alt="image2" />
                                
                            </div>
                            <div class="carousel-item">
                                <img src="AS.jpg" alt="image3" />
                                
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

                <div class="col-lg-4" style="border: 1px solid rgb(93, 137, 177) ">
                    <img src="image1.jpg" class="img-fluid">
                </div>
                    
                <div class="col-lg-4" style="border: 1px solid rgb(42, 119, 163) ">
                    <p style="font-size: xx-large;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><B>This web is mainly created to advertise products in our store<br />
                    The business idea was just created a few weeks ago<br />
                        For more Information please go to the contact page </B></p>
                </div>
            </div>
            <div class="row" style="border: 1px solid blue">
                <marquee direction="right"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                for more information please contact us using the details in the contact page</b></p>
                </marquee>     
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


