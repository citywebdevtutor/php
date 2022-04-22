<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Querystrings: Passing 1 parameter</title>
</head>
<body>
    <?php
        //$name = $_GET['name']; 
        $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
        echo 'Welcome to our website ' . $name;
        
    ?>
</body>
</html>