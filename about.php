<html>
        <head>
            <title>index page.</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <style>

            body{       
            background-image:url(p4.png);
            background-size:cover;
            color: white;
                 }
                 .card {
                display:flex;
                flex-direction: column;
                background-color:grey;
            }
            .card>img {
                height:150px;
                width:100%;
                object-fit: contain;
            }
            .pp{
                color:blue;
            }


        </style>
        </head>
        <body >
        <div class="container">

        <div class="row">
                
                    <?php
                    include("nav.html")
                    ?>
        </div>
               <div class="row">
                <div class="col-lg-4">
                    <?php
                    include("card.html")
                    ?>
                </div>
                <div class="col-lg-4">
                <p>We are available online and in malls mainly<br /><br />This web site is maily create as catalogue
                    web site<br /> <br />We sell and buy products at best prices with the best quality<br /> <br />
                    Our project has just been created <br /> <br />
                    
                </p>
                </div>
               </div>
               <div class="row">
              <p> We hope we provide the best services to you <br /> <br />Our contact is in the contact page 
                please use that page to contact us 
                <br /> <br /><b><i>More images of the products are shown in the display page</i></b>
                <br /> <br /></p>
                <p class="pp" ><b><i>Thank you for visiting our website </i></b></p>
               </div>

               <div class="row" style="border: 1px solid blue">
                   <marquee direction="left"><p style="font-size: large; ;"><b>This website is maintained and managed by the head of product-cataloque<br />
                    for more information please contact us using the details in the contact page</b></p>
                   </marquee>     
                    </div>

        </div>
        </body>
    </html>
          