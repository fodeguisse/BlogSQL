<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content=<?= $layoutDescription ?> />
        <title><?= $layoutTitle ?></title>
        <link rel="icon" type="image/x-icon" href="public/Clean/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/Clean/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"><?= $navbarTitle ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=about">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=contact">Contact</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false">
                                Catégories
                            </a>
                            <div class="dropdown-menu">
                                <?php foreach ($categories as $category){ ?>
                                    <a href="?page=category&slug=<?= $category['slug'] ?>" class="list-group-item list-group-item-action">
                                        <?= $category['name'] ?>
                                    </a>
                                <?php } ?>
                                
                                </div>
                        </li>

                        <?php if (!isset($_SESSION['user'])) { ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=login">Login</a></li>
                    
                        <?php } else {
                            ?>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=addpost">Proposer un article</a></li>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=logout">Logout</a></li>

                        <?php } ?>

                        <?php if (isset($_SESSION['user'])) { ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=login"></a></li>
                    
                        <?php } ?>
                        
                        <?php if (isset($_SESSION['user'])) { ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="?page=profile">(<?= $_SESSION['user']['firstName']?>)</a></li>
                        <?php } ?>
                        

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= $layoutImage?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <?= displayFlashMessage() ?>
                            <h1><?= $headerTitle ?></h1>
                            <span class="subheading"><?= $headerSubHeading ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>