<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
        
        body  {
            background-image:screenshot.png ;
           
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
                <b><i>Our whatsapp contacts</i></b>: 071234567 , 077654321
                </p>
                
            </div>
                        <hr />
            
                <h2 style="font-size:x-large; ">
                    To reach us please fill in the form below 
                </h2>   
                
        <form>
            <div>
                <label><b>First Name</b></label>
                <input type="text" place holder="Type your first name"  name="firstName" required>
            </div>
    
            <div >
                 <label><b>Second Name</b></label>
                <input type="text"  place holder="Type your second name" name="lastName" required>
            </div>
    
            <div>
                 <label><b>Telephone</b></label>
                <input type="tel" place holder="Type your tel no." name="telephone" required>
            </div>
    
            <div>
                 <label><b>Email</b></label>
                <input type="email" place holder="Type your email"  name="email" required>
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
            <input type="text" place holder="type your home address" name="address" required>
        </div>

           
            <br />
    
            <button  class="btn btn-default"><b>Submit</b></button>
        </form>
            </div>

            
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
