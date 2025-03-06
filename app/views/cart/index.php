<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $data['title']; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>/assets3/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="<?php echo BASE_URL; ?>/assets3/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="<?php echo BASE_URL; ?>/assets3/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="<?php echo BASE_URL; ?>/assets3/css/style.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>AN</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= BASE_URL; ?>/login">Login</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Category
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">MOBILE</li>
                        <li class="list-group-item">COMPUTER</li>
                    </ul>
                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Products</li>
                    </ol>
                </div>
                    <?php foreach ($_SESSION['product'] as $product) {?>
                    	<?php echo $product['quantity']; ?>
                    <?php  }?>
                </div>
                <!-- /.row -->
                
                <!-- /.row -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="<?php echo BASE_URL?>/assets3/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="<?php echo BASE_URL?>/assets3/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="<?php echo BASE_URL?>/assets3/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="<?php echo BASE_URL?>/assets3/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
    </script>
</body>
</html>
