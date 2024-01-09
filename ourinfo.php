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
                </div>
                <div class="col-lg-6">
                <h2 style="font-size:x-large; ">
                    To reach us please fill in the form below ;
                </h2>   
                
        <form>
            <div>
                <label><b>First Name</b></label>
                <input type="text" placeholder="Type your first name"  name="firstName"class="form" required>
            </div>
    
            <div >
                 <label><b>Second Name</b></label>
                <input type="text"  placeholder="Type your second name" name="lastName"class="form" required>
            </div>
    
            <div>
                 <label><b>Telephone</b></label>
                <input type="tel" placeholder="Type your tel no." name="telephone" class="form" required>
            </div>
    
            <div>
                 <label><b>Email</b></label>
                <input type="email" placeholder="Type your email"  name="email"class="form" required>
            </div> 
            <br />

           <p><b>Your gender</b></p>
            <label for="">Male</label>
            <input type="checkbox" name="Male">

            <label for="">Female</label>
            <input type="checkbox" name="Female">

            <br />
            <div>
            <label><b>Address</b></label>
            <input type="text" place holder="type your home address" name="address"class="form" required>
        </div>

           
            <br />
    
            <button type="submit" class="form" class="btn btn-default"><b>Submit</b></button>
        </form>
            </div>  
                </div>
            </div>
                       
            
              <img src="LOGO.png">
         

            <div class="row" style="border: 1px solid blue;color:black">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in this page</b></p>
                   </marquee>     
                    </div>

        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
