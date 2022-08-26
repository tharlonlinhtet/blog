<?php require_once "core/auth.php"; ?>
<?php require_once "core/isEditornAdmin.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url;?>dashboard.php">Home</a></li>
                <li class="breadcrumb-item" active aria-current="page">Category</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-layers text-primary"></i> Category Manager
                    </h4>
                </div>
                <hr>
                <?php
                    if(isset($_POST['addCat'])){
                        categoryAdd();
                    }
                ?>
                <form method="post">
                    <div class="form-inline" style="display: flex;">
                        <input type="text" class="form-control mr-2" name="title" style="width: 410px; margin-right: 10px;">
                        <button class="btn btn-primary" name="addCat">Add Category</button>
                    </div>
                </form>

                <?php include 'category_list.php'; ?>

            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>