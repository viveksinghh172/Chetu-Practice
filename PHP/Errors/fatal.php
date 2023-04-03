<!-- A fatal error is generated when a function is called without its definition. -->

<!-- Example 1: Calling undefined function -->

<?php
    function add($f1, $f2)
    {
        $sum = $f1+$f2;
        echo "Addition: ".$sum;
    }
    $f1 = 5;
    $f2 = 10;
    catch_error();
?>