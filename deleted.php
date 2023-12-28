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
           include("nav.html")
            ?>
            </div>
            <div class="row" style="border:2px solid black ; background:image2.png" >
                   <?php
                   include("carousel.html")
                   ?>
                </div>
                <div class="row" style="border: 1px solid blue">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in the contact page</b></p>
                   </marquee>     
                    </div>
                </button>
               </nav>
            </div>
        </div>
    </body>
</html>

addcslashes

<html>
    <head>
        <title>Add page</title>
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
 <div class="row" style="border: 2px solid palevioletred">
    <form>
        <div>
            <label style="font-size: xx-large;">First name</label>
            <input type="text" place holder="type your 1st name" name="firstName" required>
        </div>
        <br />

        <div>
            <label style="font-size: xx-large;">Second name </label>
            <input type="text" place holder="type your 2nd name" name="lastName" required>
        </div>
        <br />

        <div>
            <label style="font-size: xx-large ;" > Email</label>
            <input type="email" place holder="type your email" name="email" required>
        </div>
        <br />

        <div>
            <label style="font-size: xx-large;">Telephone no.</label>
            <input type="number" place holder="type your tel no." name="telephone" required>
        </div>
        <br />

        <div>
            <label style="font-size: xx-large;">Addresss</label>
            <input type="text" place holder="type your home address" name="address" required>
        </div>
        <br />

        <button class="btn-default" style="font-size: x-large;">Submit</button>
        
      </form>


</div>
</body>
</html>


About

<html>
    <head>
        <title>about page</title>
       
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
      <div class="row">
            <div class="col-lg-4" style="border: 2px solid black">
            <p style="font-size: x-large; ">we also prodive services like online orders  </p>
            </div>

            <div class="col-lg-4" style="border: 2px solid black">
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

            <div class="col-lg-4" style="border: 2px solid black">
                <p style="font-size: x-large; ">for more infomation please go to the display page </p>
            </div>
        </div>

        <div class="row" style="border: 2px solid black">
        <p style="font-size: x-large; ">this is where you will find qualified items</p>
        </div>

    </div>
        <script src="js/bootstrap.min.js"></script>
       </body>
</html>



insteadOf

<html>
    <head>
        <title>Contact page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"
    </head>
    <body>
<div class="container">
 <div class="row" style="border: 2px aqua solid">
             <?php
            include("nav.html");
            ?>
</div>

    <div class="row" style="border: 2px solid palevioletred">
<div class="col-lg-6" style="border :1px solid black">
    <h1>Your contact details</h1>
        <form>
            <div>
                <label>First Name</label>
                <input type="text" place holder="Type your first name"  name="firstName" required>
            </div>
    
            <div >
                <label>Second Name</label>
                <input type="text"  place holder="Type your second name" name="lastName" required>
            </div>
    
            <div>
                <label >Telephone</label>
                <input type="tel" place holder="Type your tel no." name="telephone" required>
            </div>
    
            <div>
                <label >Email</label>
                <input type="email" place holder="Type your email"  name="email" required>
            </div> 

           <h2>Your gender</h2>
            <label for="">Male</label>
            <input type="checkbox" name="Male">

            <label for="">Female</label>
            <input type="checkbox" name="Female">

           
            <br />
    
            <button  class="btn btn-default">Submit</button>
        </form>
</div>

        <div class="col-lg-6" style="border : 1px solid black"> 
            <h2>Our contact details</h2> 
 <center>  <p style="font-size: xx-large; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
            our email ; productcatalogue202045@gmail.com <br />contact;0729167215 <br />
             for more infomation pls contact to the tel no. above</p> </center>
           </div>
</div>
        
        <div class="row" style="border: 2px solid palevioletred;">
      <p>we provide the best quality items</p>
        </div>
</div>
        

       </div>
    </body>
</html>

          
       
          
      
         