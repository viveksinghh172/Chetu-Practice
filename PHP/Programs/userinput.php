<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taking Input From User</title>
</head>
<body>
    <form action="userinput.php" method="get">
        <input type="text" name="first" placeholder="Enter First Number"><br>
        <input type="text" name="second" placeholder="Enter Second Number"><br>
        <input type="submit" value="Add"><br>
    </form>

    <?php
    error_reporting(0);

        $num1=$_GET['first'];
        $num2=$_GET['second'];
    ?>
    <input type="text" <?php echo $num1+$num2 ?> >

</body>
</html>