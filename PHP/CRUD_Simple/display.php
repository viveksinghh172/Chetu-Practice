<?php

include('connection.php');
$sql = "select * from crud_data";
$result = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display CRUD Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <table class="table table-dark">
        <tr>
            <th>ID Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Created_at</th>
        </tr>

        <?php
        foreach($result as $data)
        {
            echo "<tr>";
            echo"<td>";echo $data['id'];echo"</td>";
            echo"<td>";echo $data['name'];echo"</td>";
            echo"<td>";echo $data['email'];echo"</td>";
            echo"<td>";echo $data['phone'];echo"</td>";
            echo"<td>";echo $data['created_at'];echo"</td>";
        }
        ?>

    </table>
</div>
    
</body>
</html>