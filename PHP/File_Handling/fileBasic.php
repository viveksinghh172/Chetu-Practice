<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>

<!-- fopen() – PHP fopen() function is used to open a file. -->
<?php
    //$file = fopen("demo.txt", 'w');
?>


<!--  fread() –– After file is opened using fopen() the contents of data are read using fread(). -->
<?php
    /*$filename = "demo.txt";
    $file = fopen($filename, 'r');
    $size = filesize($filename);
    $filedata = fread($file, $size);*/
?>


<!-- fwrite() – New file can be created or text can be appended to an existing file using fwrite() function.  -->
 <?php
    /*$file = fopen("demo.txt", 'w');
    $text = "Hello World\n";
    fwrite($file, $text);*/
 ?>


<!-- fclose() – file is closed using fclose() function. -->
<?php
    $file = fopen("demo.txt", 'r');
    //some code to be executed
    fclose($file);
?>

</body>
</html>