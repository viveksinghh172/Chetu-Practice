<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUP Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        h3{
            background-color: #2a9df4;
            color: white;
            text-align: center;
            margin-top: 10px;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Insert Your Details</h3>
    <form action="register.php" method="POST">   
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" placeholder="Enter" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputMobile">Mobile Number</label>
            <input type="text" class="form-control" placeholder="Mobile Number" name="phone">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>
</div> 

</body>
</html>