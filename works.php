<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>

<body>
    <?php 
    //printing the a welcoming message//
    echo "HELLO YOU. WELCOME TO MY PAGE. HOPE YOU LIKE IT  ";
    require "other_functions.php";
    include "my_add_functions.php";
    
// calling and exceuting the uderdefined function
    echo myAdd (89, 98);
    $results= myAdd(89, 98);
    echo other($results);
  
?>

    
</body>
</html


/