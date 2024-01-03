<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
        body {
            background-image:url(p5.png);
            background-size:cover;
            color: white;
        }
       img {
                width:500px;
                border-radius:50px;
                float:right;
                margin-right:10px;
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

                <h1  style="font-size:large; ">
                    Our contact information
                </h1> 

                <p style="font-size:x-large"><b>You can contact as through the following ;</b></p>
               <p><b> <i>Our email</i></b>: productcatalogue0123@gmail.com<br />
                <b><i>Our whatsapp contacts</i></b>: + 256234567 , + 256654321 , + 256876459
                </p>
                
            </div>
                        <hr />
            
                <h2 style="font-size:x-large; ">
                    To reach us please fill in the form below ;
                </h2>   
                
        <form>
            <div>
                <label><b>First Name</b></label>
                <input type="text" place holder="Type your first name"  name="firstName"class="form" required>
            </div>
    
            <div >
                 <label><b>Second Name</b></label>
                <input type="text"  place holder="Type your second name" name="lastName"class="form" required>
            </div>
    
            <div>
                 <label><b>Telephone</b></label>
                <input type="tel" place holder="Type your tel no." name="telephone" class="form" required>
            </div>
    
            <div>
                 <label><b>Email</b></label>
                <input type="email" place holder="Type your email"  name="email"class="form" required>
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
    
            <button class="form" class="btn btn-default"><b>Submit</b></button>
        </form>
            </div>
            <img src="LOGO.png" >
                <p>We provide the best quality products<br />
                 in all catagories e.g electronics,grocery and more </p>
                <p>Our products come from various places in the world </p>
                <p>As our stock has different variourity products you have different choises</p>

            <div class="row" style="border: 1px solid blue;color:black">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in this page</b></p>
                   </marquee>     
                    </div>

        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
