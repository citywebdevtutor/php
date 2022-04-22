<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $genreList = array("crime","romance","biography","comedy","sport");
        $genre = htmlspecialchars($_REQUEST['genre'], ENT_QUOTES, 'UTF-8');
    
        if(in_array($genre, $genreList))
        {
            echo "The following book genre has been found in our records: " . $genre;
        }
        else if(empty($genre))
        {
            echo "Please enter a value<br>";
            echo "<a href='search.php'>Go back to search book genres</a>";
        }
        else
        {
            echo "The book genre you entered has not been found.";
        }


        echo "<hr><p>Here is a list of all books in the array:</p>";
        
        echo "<ul>";
        foreach($genreList as $value){
            echo "<li>$value </li>";
        }
        echo "</ul>";
    ?>
</body>
</html>