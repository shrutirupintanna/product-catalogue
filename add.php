<html>
    <head>
        <title>Add page</title>
    </head>
    <body >
    <div class="container">
        <div class="row" style="font-size: large;border: 2px solid black">
                <?php
            include("nav.html");
            ?>
            </div>
      <h1 style="text-decoration: aqua ; font: size 2px ">Please fill in the form below</h1>
      <div class="row">
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