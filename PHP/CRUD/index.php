<?php
session_start();
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Index File</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body
        {
            background-color: gray;
        }
        .card
        {
            background-color: rgb(206, 240, 229);
            border: 2px solid black;
        }
        th
        {
            border: 2px solid black;
        }
    </style>
</head>
<body>

<div class = "container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="border-bottom: 2px solid black;">
                    <h4>All Details
                        <a href="create.php" class="btn btn-primary float-right">Add Details</a>
                    </h4>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" style="border: 2px solid black">
                            <thead>
                                <tr>
                                    <th style="border: 2px solid black;">ID</th>
                                    <th style="border: 2px solid black;">Name</th>
                                    <th style="border: 2px solid black;">Email</th>
                                    <th style="border: 2px solid black;">Phone</th>
                                    <th style="border: 2px solid black;">Course</th>
                                    <th style="border: 2px solid black;">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                    $query = "select * from data";
                                    $query_run = mysqli_query($con, $query);
                                    if($query_run)
                                    {
                                        foreach($query_run as $data)
                                        {
                                ?>
                                            <tr>
                                                <td><?= $data['id']; ?></td>
                                                <td><?= $data['name']; ?></td>
                                                <td><?= $data['email']; ?></td>
                                                <td><?= $data['phone']; ?></td>
                                                <td><?= $data['course']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?= $data['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <!-- Deleting the data -->
                                                    <!-- <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                                    </form> -->
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h4>No record found</h4>";
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>