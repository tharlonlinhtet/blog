<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">

    <div class="d-flex justify-content-between align-items-center py-2 my-4">
        <div class="d-flex align-items-center">
            <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2" style="margin-right: 10px;">
                <i class="feather-shopping-bag text-white h4 mb-0"></i>
            </span>
            <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
        </div>

        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em;"></i>
        </button>
    </div>

    <div class="nav-menu">
        <!-- Dashboard -->
        <ul>
            <li class="menu-item">
                <a href="<?php echo $url;?>dashboard.php" class="menu-item-link">
                    <span>
                        <i class="feather-home"></i> Dashboard
                    </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;?>index.php" class="menu-item-link">
                    <span>
                        <i class="feather-arrow-right-circle"></i> Go To Blog
                    </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;?>wallet.php" class="menu-item-link">
                    <span>
                        <i class="feather-dollar-sign"></i> Wallet
                    </span>
                </a>
            </li>
            <li class="menu-spacer"></li>
        </ul>
        <!-- Manage Items -->
        <ul>
            <li class="menu-title">
                <span>Manage Posts</span>
            </li>
            <!-- Add Items -->
            <li class="menu-item">
                <a href="<?php echo $url;?>post_add.php" class="menu-item-link active">
                    <span>
                        <i class="feather-plus-circle"></i> Add Post
                    </span>
                </a>
            </li>
            <!-- Item List -->
            <li class="menu-item">
                <a href="<?php echo $url;?>post_list.php" class="menu-item-link">
                    <span>
                        <i class="feather-list"></i> Post List
                    </span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary">
                        <?php echo countTotal('posts'); ?>
                    </span>
                </a>
            </li>
            <li class="menu-spacer"></li>

            <!-- Editor ဖြစ်မှမြင်ရ‌အောင်လုပ်  -->
            <?php if($_SESSION['user']['role'] <= 1 ){ ?>

                <li class="menu-title">
                    <span>Setting</span>
                </li>
                <li class="menu-item">
                    <a href="<?php echo $url;?>category_add.php" class="menu-item-link">
                        <span>
                            <i class="feather-layers"></i> Category Manager
                        </span>
                        <span class="badge badge-pill bg-white shadow-sm text-primary">
                            <?php echo countTotal('categories'); ?>
                        </span>
                    </a>
                </li>

                <!-- Admin ဖြစ်မှမြင်ရအောင်လုပ် -->
                <?php if($_SESSION['user']['role'] == 0){ ?>

                    <li class="menu-item">
                        <a href="<?php echo $url;?>user_list.php" class="menu-item-link">
                            <span>
                                <i class="feather-users"></i> User Manager
                            </span>
                            <span class="badge badge-pill bg-white shadow-sm text-primary">
                                <?php echo countTotal('categories'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="menu-spacer"></li>

                <?php } ?>

            <?php } ?>

        </ul>
    </div>
</div>