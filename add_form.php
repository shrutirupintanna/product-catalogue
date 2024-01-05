
<html >
<head>
    <title>Add Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<div class="row" style="font-size: large;border: 2px solid black">
                    <?php
                include("nav.html");
                ?>
            </div>
    <div class="row">
    <h1>Add information</h1>   
    <form action="process.php" method="post">

        <div class="form-group">
            <label>ProductName</label>
            <input type="text" name="ProductName" class="form-control" placeholder="Give your full name">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="Price" >
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="number" class="form-control" name="Quantity"  >
        </div>

        <div class="form-group">
            <label>ProductDescription</label>
            <input type="text" class="form-control" name="ProductDescription" placeholder="Give a description">
</div>

        <button type="submit" class="btn btn- default">Add information</button>
    </form>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>