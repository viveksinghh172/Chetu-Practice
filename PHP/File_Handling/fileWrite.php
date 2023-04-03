!<!DOCTYPE html>
<html lang="en">
    <head>
        <title>File Write Function</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
       /* $myfile = fopen("demo.txt", "w");
        echo fwrite($myfile, "PHP is an open source general purpose scripting language");
        fclose($myfile);*/

       /* $myfile = fopen("demo.txt", "w");
        echo fwrite($myfile, "PHP is easy to learn");
        echo fwrite($myfile, "You can learn it easily");
        fclose($myfile);*/
    ?>

    <!-- Programs to illustrate the write function -->
    <?php
        //opening a file
        $myfile = fopen("demo.txt", "w");
        //Writing content to the file
        echo fwrite( $myfile, "PHP stands for Hypertext Preprocessor");
        //closing the file
        fclose($myfile);
    ?>

    
    </body>
</html>