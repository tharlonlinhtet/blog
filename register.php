<?php

    require_once "core/base.php";
    require_once "core/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="<?php echo $url ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/vendor/data_table/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/style.css">
</head>
<body style="background: var(--primary-soft)">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center text-primary">
                            <i class="feather-users"></i>
                            User Register
                        </h4>
                        <hr>
                        <?php
                            if(isset($_POST['reg-btn'])){
                                echo register();
                            }
                        ?>
                        <form method="post">
                            <div class="form-group">
                                <label for=""> <i class="text-primary feather-user"></i> Username</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="text-primary feather-mail"></i> Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="text-primary feather-lock"></i> Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""><i class="text-primary feather-lock"></i> Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" required>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary" name="reg-btn">Register</button>
                                <a href="login.php" class="btn btn-outline-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo $url ?>assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="<?php echo $url ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $url ?>assets/js/app.js"></script>
</body>

</html>