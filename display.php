<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
        body{      
            background-image:url(p3.png);
            background-size:cover;
            color: white;
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

            <div class="row" >
            <?php
            include("carousel.html")
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

   