<html>
    <head>
        <title>Index page</title>
       
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
          
        <div class="row" style="border : 1px solid black">
          <div class="col-lg-4" style="border: 2px solid rgb(11, 20, 11)">
            <p style="font-size: x-large; ">Electronnics like smart tvs,watches etc</p>
          </div>
          
          <div class="col-lg-4" style="border: 1px solid black">
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner" alt="image1">
                <div class="carousel-item active">
                    <img src="image1.png />
                </div>
                <div class="carousel-item>
                    <img src="image3.jpg" alt="image2" />
                    
                    <div class="overlay"></div>
                    <div class="carousel-content">
                        <h2></h2>
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image2.jpg" alt="image3" />                   
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
          
          <div class="col-lg-4" style="border: 2px solid black">
            <p style="font-size: x-large; ">for more infomation please go to the display page </p>
          </div>
        </div>
</div>
          
        <div class="row" style=" border: 2px solid black">
          <p style="font-size: x-large; ">this is where you will find qualified items</p>
        </div>
      </div>
        <script src="js/bootstrap.min.js"></script>
       </body>
</html>
