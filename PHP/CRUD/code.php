<?php

session_start();
require('connection.php');


// Insert Details

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "insert into data (name, email, phone, course) values ('$name','$email','$phone','$course')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message']= "Data inserted successfully 😊😊";  // To give a message
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']= "Data not inserted";  // To give a message
        header("Location: create.php");
        exit(0);
    }
}


// Edit details

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "update data set name='$name', email='$email', phone='$phone', course='$course' where id='$id' ";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message']= "Datails updated successfully 😊😊";  // To give a message
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']= "Details not updated";  // To give a message
        header("Location: create.php");
        exit(0);
    }
}


// To delete the data

// if(isset($_POST['delete']))
// {
//     $id = $_POST['id'];

//     $query = "delete from data where id = '$id' ";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message']= "Datails deleted successfully 😊😊";  // To give a message
//         header("Location: create.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message']= "Details not deleted";  // To give a message
//         header("Location: create.php");
//         exit(0);
//     }
// }


?>