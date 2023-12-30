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



        </style>
        </head>
        <body >
        <div class="container">
               <div class="row">
                <div class="col-lg-4">
                    <?php
                    include("card.html")
                    ?>
                </div>
                <div class="col-lg-4">
                    <p>..</p>
                </div>
                <div class="col-lg-4">
                    <p>....</p>
                </div>
               </div>

        </div>
        </body>
    </html>
          