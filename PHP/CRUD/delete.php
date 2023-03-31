<?php

session_start();

require 'connection.php';

$id = $_GET['id'];

$query = "delete from data where id='$id' ";
$query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['message'] = "Data deleted successfully 😊😊";  // To give a message
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";  // To give a message
        header("Location: index.php");
        exit(0);
    }


?>