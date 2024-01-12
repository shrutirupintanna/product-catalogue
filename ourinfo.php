<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
        body {
            background-image:url(images/p5.png);
            background-size:cover;
            color: white;
        }
      
        .form {
            border-radius:10px;
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

            <div class="row" style="background-image:screenshot.png;padding-bottom:100px;">
                <div class="col-lg-6">
              
                        <h1  style="font-size:large; ">
                            Our contact information
                        </h1> 

                        <p style="font-size:x-large"><b>You can contact as through the following ;</b></p>
                    <p><b> <i>Our email</i></b>: productcatalogue0123@gmail.com<br />
                        <b><i>Our whatsapp contacts</i></b>: + 256234567 , + 256654321 , + 256876459
                        </p>
                        <img src="LOGO.png">
                </div>
                <div class="col-lg-6" style="border :1px solid black">
                <h1>Add information</h1>   
    <form action="processcontact.php" method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="Name" class="form-control" placeholder="Give the  name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="Email" >
        </div>

        <div class="form-group">
            <label>Telephone</label>
            <input type="text" class="form-control" name="Telephone" >
        </div>

        <button type="submit" class="btn btn-success">Add information</button>
    </form>
</div>
                </div>
            </div>
                       
            
           
         

            <div class="row" style="border: 1px solid blue;color:black">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in this page</b></p>
                   </marquee>     
                    </div>

        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
