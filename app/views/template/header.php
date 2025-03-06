<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>
        <?= $data['title']; ?>
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?= BASE_URL; ?>/css/css/font-awesome.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/css/css/animate.min.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/css/css/owl.carousel.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/css/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?= BASE_URL; ?>/css/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?= BASE_URL; ?>/css/css/custom.css" rel="stylesheet">

    <script src="<?= BASE_URL; ?>/js/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?= BASE_URL; ?>/img/img/favicon.png">



</head>

<body>
    <!-- *** NAVBAR ***
 _________________________________________________________ -->
    <?php Flasher::flashLogin(); ?>

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?= BASE_URL; ?>" data-animate-hover="bounce">
                    <img src="<?= BASE_URL; ?>/img/img/cl.png" alt="Obaju logo" class="hidden-xs">
                    <img src="<?= BASE_URL; ?>/img/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only"></span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <?php 
                        if (!$_SESSION) {
                             echo '<a href=# data-toggle="modal" data-target="#login-modal" class="btn btn-default navbar-toggle"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>' ;
                        }else{
                            echo '<a href= '. BASE_URL . '/Keranjang/by/'. $_SESSION['uUsername'] .' class="btn btn-default navbar-toggle"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>';
                        }
                    ?>
                    
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?= BASE_URL; ?>">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Product Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="<?= BASE_URL; ?>/Kategori/katLoc/Local"><h5>Local Bean</h5></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="<?= BASE_URL; ?>/Kategori/katInt/International"><h5>International Bean</h5></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">About Us</a>
                    </li>

                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">

                    <?php 
                        if (!$_SESSION) {
                            echo '<a href=# data-toggle="modal" data-target="#login-modal" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>' ;

                        }else{
                          echo  '<a href= '. BASE_URL .'/Keranjang/by/'. $_SESSION['uUsername'] .' class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a>';
                          echo '&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit" value="login" name="login"><i class="fa fa-sign-in"></i> Log Out </button>';
                        }
                        
                    ?>

<!--                     <a href="<?= BASE_URL; ?>/Keranjang/by/<?= $_SESSION['uUsername']; ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"></span></a> -->
                </div>
                <!--/.nav-collapse -->
                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search" action="<?php echo BASE_URL;?>/Search/product" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Product Name" name="cari">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary" value="cari"><i class="fa fa-search"></i></button>
            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->