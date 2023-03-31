<?php

    $con = new mysqli("localhost", "root", "", "crud_new");

    if(!$con)
    {
        die("Connection Failed".mysqli_connect_error());
    }

?>