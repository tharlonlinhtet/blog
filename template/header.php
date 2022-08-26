<?php require_once "core/base.php"; ?>
<?php require_once "core/functions.php"; ?>

<!doctype html>
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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/style.css">

</head>
<body>

    <section class="main container-fluid">
        <div class="row">
            <!-- sidebar start -->
            <?php include "template/sidebar.php";?>
            <!-- sidebar end -->
            <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">
                <div class="row header mb-4">
                    <div class="col-12">
                        <div class="p-2 bg-primary d-flex justify-content-between align-items-center rounded">
                            <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                                <i class="feather-menu text-light" style="font-size: 2em;"></i>
                            </button>
                            <form action="" class="d-none d-md-block">
                                <div class="form-inline d-flex">
                                    <input type="text" class="form-control" style="margin-right: 5px;">
                                    <button class="btn btn-light">
                                        <i class="feather-search"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="<?php echo $url;?>assets/img/<?php echo $_SESSION['user']['photo'] ?>" class="user-img shadow-sm" alt=""> 
                                  <?php echo $_SESSION['user']['name']; ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <div class="dropdown-divider"></div>
                                  <li><a class="dropdown-item" href="<?php echo $url; ?>/logout.php">Log Out</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>