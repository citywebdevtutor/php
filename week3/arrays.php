<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>An array of authors</h2>
    <?php
        // M.Rossiter - 2022. Arrays handout solution
        
        $authors = array('Steinbeck','Kafka','Tolkien','Dickens'); // declare an array of authors

        echo $authors[2] . "<br><br>"; // output the third author (array index number 2) in the array to the page

        // use foreach loop to loop through the authors array and output array values to page
        foreach ($authors as $value){
               echo  $value . "<br>"; 
        }


        // use foreach loop to loop through the array and add the appropriate html elements and css to style accordingly
        echo "<ul>"; // open unordered list
            // loop through array and display each author
            foreach($authors as $value){
                    echo "<li><a href='https://www.google.com/search?q=$value'>" . $value . "</a></li>"; // list each value in array 
            }
        echo "</ul>"; // close unordered list
    ?>
</body>
</html>