<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading a file</title>
</head>
<body>

<!-- Syntax -- string fread ($file, $length) -->
<?php
    // Opening a file
/*$myfile = fopen("demo.txt", "read");

// reading 13 bytes from the file using fread() fn
echo fread($myfile, "12");
fclose($myfile); */
?>

<!-- Reading entire file using fread() function -->
<?php
   /* $myfile = fopen("demo.txt", "r");
    echo fread($myfile, filesize("demo.txt"));
    fclose($myfile); */
?>

<!-- opening in binary read mode for windows system -->
<?php
    $myfile = "php-logo.svg";
    $myhandle = fopen($myfile, "rb");

    //reading an image using fread
    echo fread($myhandle, filesize($myfile));
    fclose($myhandle);
?>
    
</body>
</html>