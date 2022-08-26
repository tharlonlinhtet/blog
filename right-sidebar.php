<div class="col-12 col-md-4">
    <div class="front-panel-right-sidebar">

        <a href="dashboard.php" class="btn btn-primary w-100 mb-3">Go Dashboard</a>

        <h4>Category List</h4>
        <!-- All Categories -->
        <a href="<?php echo $url; ?>index.php" class="list-group-item list-group-item-action 
            <?php echo isset($_GET['category_id']) ? '' : 'active' ?>">
            All Categories
        </a>
        <!-- Other Categories -->
        <div class="list-group mb-4">
            <?php foreach (fCategories() as $c) { ?>
                <a href="category_based_post.php?category_id=<?php echo $c['id']; ?>" class="list-group-item list-group-item-action 
                    <?php echo isset($_GET['category_id']) ? ($_GET['category_id'] == $c['id'] ? "active" : '') : '' ?> ">
                    <?php if ($c['ordering'] == 1) { ?>
                        <i class="feather-paperclip text-primary"></i>
                    <?php } ?>
                    <?php echo $c['title'] ?>
                </a>
            <?php } ?>
        </div>
        <!-- Advertisement -->
        <div class="mb-4">
            <h4>Advertisement</h4>
            <img src="<?php echo $url; ?>assets/img/ad.png" class="w-100 rounded" alt="">
        </div>

        <div class="">
            <h4>Search By Date</h4>
            <div class="card">
                <div class="card-body">
                    <form action="search-by-date.php" method="post">
                        <div class="form-group">
                            <label for="">Start Date</label>
                            <input type="date" name="start" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">End Date</label>
                            <input type="date" name="end" class="form-control" required>
                        </div>
                        <button class="btn btn-primary">
                            <i class="feather-calendar"></i> Search
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>