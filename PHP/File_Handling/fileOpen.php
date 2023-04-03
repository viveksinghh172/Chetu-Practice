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

<!--             Syntax:
resource fopen ( $file, $mode, $include_path, $context) -->

<?php
    # Opening a file using fopen()
    # function in read only mode

   /* $myfile = fopen("gfg.txt", 'r')
        or die("File does not exist!"); */    // File does not esist
?>


<!-- Function in read/write mode -->
<?php
    /*$myfile = fopen("demo.txt", 'r+')
        or die("file does mot exist");

    $pointer = fgets($myfile);
    echo $pointer;
    fclose($myfile);    */     // o/p - file content 
?>


<!-- In read mode along with b flag -->
<?php 
   /* $myfile = fopen("demo.txt", "rb");
    $contents = fread($myfile, filesize($myfile));
    fclose($myfile);
    print $contents; */
?>


<!-- Opening file in read/write mode -->
<?php
    $myfile = fopen("demo.txt", "w+");

    //writing to file
    fwrite($myfile, 'hello user! How are you?');

    //setting file pointer to the 0th position using rewind() fn.
    rewind($myfile);

    //Writing to file on 0th position
    fwrite($myfile, "Strat from 0th position.");
    rewind($myfile);

    // displaying the content of the file
    echo fread($myfile, filesize("demo.txt"));
    fclose($myfile);
?>

    
</body>
</html>