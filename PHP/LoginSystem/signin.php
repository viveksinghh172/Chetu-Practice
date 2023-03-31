<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap css CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card signin_card">
            <!-- card header -->
            <div class="card-header">
                <h3 class="text-center">Sign In</h3>
            </div>
            <!-- card body -->
            <div class="card-body">
                <form action="">
                    <!-- first field -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Your Username" aria-label="Username" aria-describedby="basic-addon1" required="required" name="username" autocomplete="off">
                    </div>
                    <!-- second field -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Enter Your Password" aria-label="Password" aria-describedby="basic-addon1" required="required" name="password" autocomplete="off">
                    </div>
                    <!-- signup button -->
                    <div class="form-group">
                        <input type="submit" name="signin" value="Sign in" class="btn signup_btn">
                    </div>
                </form>
            </div>
            <!-- card footer -->
            <div class="card-footer text-center text-light signup">
                Don't have an account? <a href="index.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>