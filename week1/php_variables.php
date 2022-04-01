<?php
    // M. Rossiter - PHP consolodation exercise - week 1
    // Declare variables 
    $answer = 7;
    $price = 5.99;
    $author= "Alex Garland";
    $title = "The Beach";
    $description = "Bangkok - first stop on the backpackers trail. On Richard's first night in a hostel a mysterious traveller slits his own wrists, leaving Richard a map to the beach.";
    $currency = "&pound;";

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consolidation Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Digital Book Reviews</h1>
        <!-- write out value of variables within the html -->
        <p class="italic">Today's Recommended Download:</p>
        <h2><?php echo $title; ?></h2>
        <p class="description"><?php echo $description; ?></p>
        <p class="bold">Price: <?php echo "$currency$price"; ?></p>
        <p class="bold">Downloads Today: <?php echo $answer; ?></p>
    </section>
</body>
</html>