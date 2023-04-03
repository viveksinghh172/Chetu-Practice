<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closing a  file</title>
</head>
<body>

<!-- syntax-- bool fclose($file) -->
<?php
    /* $check = fopen("demo.txt", "r");
    echo fclose($check); */       // o/p  true - 1
?>
<?php
    /*$check = fopen("demo.txt", "r");
    $seq = fgets($check);
    while(! feof($check))
    {
        echo $seq;
        $seq = fgets($check);
    }
    echo fclose($check);  */       // o/p 1
?>

<!-- In the below program the file named demo.txt contains only a single line “This file consists of only a single line”-->
<?php
    $check = fopen("demo.txt", "r");
    $seq = fgets($check);
      
    // Outputs a line of the file until
    // the end-of-file is reached
    while(! feof($check))
    {
      
      $seq = fgets($check);
      echo $seq ;
    }
      
    // the file is closed using fclose() function
    fclose($check);
?>
    
</body>
</html>