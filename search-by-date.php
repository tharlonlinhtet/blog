<?php require_once "front_panel/head.php"; ?>

<title>Home</title>

<?php require_once "front_panel/side_header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>index.php">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">
                        Search Post Between "<?php echo $_POST['start']; ?>" and "<?php echo $_POST['end']; ?>"
                    </li>
                </ol>
            </nav>
            <div class="">
                <?php 
                $result = fSearchByDate($_POST['start'],$_POST['end']);
                if(count($result) == 0){
                    echo alert("There is no result", "warning");
                } ?>
                <!-- Contents -->
                <?php foreach ($result as $p) { ?>
                    <?php include "single.php"; ?>
                <?php } ?>
            </div>
        </div>
        <?php require_once "right-sidebar.php"; ?>
    </div>
</div>

<?php require_once "front_panel/footer.php"; ?>