<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php

    # Array_chunk() - Split an array into chunks
    /*$array = array('a','b','c','d','e','f');
    $test = array_chunk($array, 6);
    echo "<pre>";
    print_r ($test);
    echo "</pre>";*/

    # Array_slice() - Extract a slice of the array.
    $array = array('a','b','c','d','e','f');
    $array = ['a','b','c','d','e','f'];
    $test = array_slice($array, 2);
    echo "<pre>";
    print_r ($test);
    echo "</pre>";

?>
    
</body>
</html>