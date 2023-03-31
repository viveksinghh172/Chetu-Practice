<?php

include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "insert into crud_data(name, email, phone) values ('$name', '$email', '$phone')";
$result = mysqli_query($con, $sql);

if($result)
{
    echo "Data Inserted Successfully";
}
else
{
    echo "Something went wrong";
}

?>