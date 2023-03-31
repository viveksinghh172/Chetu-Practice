<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body style="text-align:center; font-size:25px;">

<?php

    # Indexed arrays without key
    /*$array = array("foo", "bar", "hello", "world");
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    var_dump($array);*/


    # Keys not on all elements
    /*$array = array(
            "a",
            "b",
        6 =>"c",
            "d"
    );
    echo "<pre>";
    print_r($array);
    echo "</pre>";*/


    # Complex Type Casting and Overwriting example
    $array = array(
        1 => 'a',
        '1'=> 'b',
        1.5=> 'c',
        -1 => 'd',
        '01'=> 'e',
        '1.5'=>'f',
        true => 'g',
        false=> 'h',
        0 => 'i',
        null => 'j',
        '' => 'k',
        'l',
        2 => 'm',
    );
    echo $array[null];

?>
    
</body>
</html>