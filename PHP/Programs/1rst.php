<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frist PHP Program</title>
</head>
<body>
    <h1>PHP Language</h1>

<?php
$var1 = 5;
$var2 = 10;
$result = $var1+$var2;

// phpinfo();
echo $_SERVER['HTTP_USER_AGENT'];
?>
<br>
<?php echo "1) PHP Special Syntax Code"; ?><br>

<?= "2) PHP Special Syntax Code"; ?><br>
<?= $result?><br>

<?php for ($i = 0; $i < 5; ++$i): ?>
<br>Hello, there!
<?php endfor; ?>
    
</body>
</html>