<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php

     # Accessing array elements
     $array = array(
        "foo" => "bar",
        42 => 24,
        "multi" => array(
            "diamentional" => array(
                "array" => "foo",
            )
        )
     );
     print_r($array['multi']['diamentional']['array']);
     foreach($array as $key => $val)
     {
        foreach($val as $subkey => $subval)
        {
            foreach($subval as $ssubkey => $ssubval)
            {
                echo $ssubkey."=".$ssubkey."<br>";
            }
        }
     }

?>
    
</body>
</html>