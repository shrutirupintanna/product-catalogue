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