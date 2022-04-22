<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Querystrings: Passing 3 parameters</title>
</head>
<body>
    <?php 
        $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
        $postcode = htmlspecialchars($_GET['pcode'], ENT_QUOTES, 'UTF-8');
        $city = htmlspecialchars($_GET['city'], ENT_QUOTES, 'UTF-8');;
        
		echo 'Welcome to our website ' . $name .', your postcode is ' . $postcode . ' and you live in ' .  $city;
       
    ?>
</body>
</html>