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

   header_remove
   
   <html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
       img {
            width:500px;
            border-radius:50px;
            float:left;
            margin-right:10px;

        }
        .username  {
            font-weight:bold;
        }

        .one{
            font: size 2px;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="row" style="font-size: large;border: 2px solid black">
                    <?php
                include("nav.html");
                ?>
            </div>
            <img src="image1.jpg" >
            <p class="username">@shrutitanna</p>
            <p class="one"> I love to learn </p>
        </div>
    </body>
</html>
           

display


           
home with cards

<html>
    <head>
        <title>index page.</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
        body {
            background-image:url(p1.png);
            background-size:cover;
            color:white;
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

            <div class="row">
            <div class="row">
                <div class="col-lg-4">
                    <?php
                    include("card.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                   <p>We deal with the following electric companies ;</p>
                   <p>HISENSE<br />SAMSUNG<br />APPLE<br />hp<br />VIVO<br />...</p>
                </div>
                <div class="col-lg-4">
                <?php
                    include("card1.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-4">
                   <p> </p>
                </div>
                <div class="col-lg-4">
                <p> </p>
                </div>
                <div class="col-lg-4">
                <?php
                    include("card2.html")
                    ?>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                <?php
                    include("card3.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                    <p> </p>
                </div>
                <div class="col-lg-4">
                <?php
                    include("card4.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                    <p> </p>
                </div>
                <div class="col-lg-4">
               <p> </p>
                </div>
                <div class="col-lg-4">
                <?php
                    include("card5.html")
                    ?>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                <?php
                    include("card6.html")
                    ?>
                </div>
                <div class="col-lg-4">
               <p> </p>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
               </div>

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



<div class="row">
                <div class="col-lg-4">
                <?php
                    include("card3.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                    <p> </p>
                </div>
                <div class="col-lg-4">
                <?php
                    include("card4.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p>Our products are imported </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                    <p> </p>
                </div>
                <div class="col-lg-4">
                    <p>
                In clothings we provide
                woolen
                silk
                cotton clothings etc
                    </p>

                </div>
                <div class="col-lg-4">
                <?php
                    include("card5.html")
                    ?>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
                <?php
                    include("card6.html")
                    ?>
                </div>
                <div class="col-lg-4">
               <p>In jellwery we provide quality products that last long
                the items are shown below </p>
                </div>
                <div class="col-lg-4">
                    <p> </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
               
                </div>
                <div class="col-lg-4">
                <?php
                    include("card7.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p>We also provide wall decorators </p>
                </div>
               </div>

               <div class="row">
                <div class="col-lg-4">
               <p> </p>
                </div>
                <div class="col-lg-4">
               <p>These have many designs as shown<br />They are used in places as they last longer<br />
                They also have many colors <br /><b><i>More images are in the display page</i></b></p>
                </div>
                <div class="col-lg-4">
                <?php
                    include("card8.html")
                    ?>
                </div>
               </div>

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

echo ("connection successfully connected ");


if 

if($con) {
    echo ("connection successfully connected ");
}
    else {
        die("connection failed" . mysqli_error($connect));
    }

?>

<td>
                        <a href="updateform.php?id='<?php $row['ID'];?>'">Update data</a>
                    <a href="updateform.php?id='<?php $row['ID'];?>'">Delete</a>
                </td>
       
                <td>ProductName</td>
                    

                <tr class="bg-dark text-white">
                    <td> ID</td>
                    <td>Price</td>
                    <td>Quantity ID</td>
                    <td>ProductDescription</td>
                    <td>Action</td>
                   
                </tr>
                <tr>
                   <?php
                    while($row = mysqli_fetch_assoc($result))
                     {
                    ?>
                     <td><?php echo $row['ID'] ?></td>
                     <td><?php echo $row['ProductName'] ?></td>
                    <td><?php echo $row['Price'] ?></td>
                    <td><?php echo $row['Quantity'] ?></td>
                    <td><?php echo $row['ProductDescription'] ?></td>
                   <td><a href="updateform.php?id=<?php echo $row['ID'] ?>" class="btn btn-primary">Update</a></td>
                  
                </tr>
                    <?php
                    }

                   ?>
      
         
       
    
               

   

       
          
      
         