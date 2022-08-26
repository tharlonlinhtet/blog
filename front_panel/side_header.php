</head>

<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary my-3 rounded">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?php echo $url; ?>index.php">Sample Blog</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <!-- Search -->
                            <form class="d-flex my-2 my-lg-0" method="post" action="<?php echo $url; ?>search.php">
                                <input class="form-control me-2" type="search" name="search_key" placeholder="Search" aria-label="Search">
                                <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Advertisement -->
            <div class="col-12">
                <?php foreach (ads() as $ad){ ?>
                    <a href="<?php echo $ad['link'] ?>" target="_blink">
                        <img src="<?php echo $ad['photo'] ?>" class="w-100 mb-3 rounded shadow-sm" alt="">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>