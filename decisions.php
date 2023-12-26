<!DOCTYPE html>
<html lang="en">
<head>
    <title>Decisions</title>
</head>
<body>
    <?php
    $d=date("D");
    if($d=="Fri"){
        echo " today is $d,go to the mosque ";
    }
    else{
        echo "Today is $d, enjoy your weekend";
    }
    ?>
</body>
</html>