<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Simple Array</title>
</head>
<body>

    <?php
        /*$array = array(
            'name' => "Ajay",
            'age' => 25,
        );
        print_r($array);

        foreach ($array as $key)
        {
            echo "$key <br>";
        }
        
        foreach($array as $key=>$value)
        {
            echo "$key = $value <br>";
        }*/


        //Using short array syntax

        /*$array = [
            'foo'=>"bar",
            'bar'=>"foo"
        ];
        #print_r($array);
        #echo $array['foo'];
        foreach($array as $key=>$val)
        {
            echo "$key=$val<br>";
        }*/


        #2 Type Casting and Overwriting example
        /*$array = array(
            1 => 'a',
            '1' => 'b',
            1.5 => 'c',
            true => 'd'
        );
        // var_dump($array);
        // print_r($array);
        echo $array[1];*/


        #3 Mixed int and string keys
        $array = array(
            'foo' => 'bar',
            'bar' => 'foo',
            100 => -100,
            -100 => 100
        );
        //var_dump($array);
        //print_r($array);
        echo $array[100];

    ?>
    
</body>
</html>