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
    <!-- <link href="<?php echo BASE_URL; ?>/assets3/css/font-awesome.min.css" rel="stylesheet" /> -->
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
                    <a href="<?php echo BASE_URL; ?>/Keranjang">Keranjang</a>

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
                <?= $data['pagination'];  ?>
                <!-- /.div -->
                <div class="row">
                    <?php foreach ($data['product'] as $product) : ?>
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <div class="caption">
                                <h4><?php echo $product['name']; ?></h4>
                                <img src="<?= BASE_URL; ?>/img/<?= $product['image'];?>" width="200" height="270"/>
                                <p>Price : <strong><?php echo $product['price']; ?></strong>  </p>
                                <p><?php echo $product['quantity']; ?></p>
                                <p><b><?= $product['category']; ?></b></p>
                                <p><?= substr(strip_tags($product['description']), 0, 50);  ?></p>
                                <!-- <form action="<?= BASE_URL; ?>/Keranjang/Add" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="uid" value="<?= $_SESSION["username"]; ?>">
                                <input type="hidden" name="pid" value="<?= $product['id']; ?>"> 
                                <select class="form-control" name="quantity" value="0">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select><br>
                                    <input type="submit" value="Tambah Ke Keranjang" class="btn btn-success" name="submit" />
                                </form> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addItem">Tambah Ke Keranjang
                                </button>
                                <!-- <a href="<?= BASE_URL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-edit float-right ml-3 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a> -->
                                    <!-- <a href="<?= BASE_URL; ?>/beranda/detail/<?= $product['id']; ?>" class="btn btn-primary" role="button">See Details</a></p> -->
                            </div>
                        </div>    
                    </div>
                    <?php  endforeach; ?>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- ./container -->
    <!-- Modal -->
    <div class="modal fade" id="addItem" tabindex="-2" role="dialog" aria-labelledby="addItemToCart" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <form action="<?= BASE_URL; ?>/Keranjang/Add" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    
                    <input type="hidden" name="uid" value="<?= $_SESSION['username']; ?>">
                    <input type="hidden" name="pid" value="<?= $product['id']; ?>">
                    <label for="formGroupExampleInput"><h3><?= $product['name']; ?></h3></label> 
                    <img src="<?= BASE_URL; ?>/img/<?= $product['image'];?>" width="200" height="270" style="display: block; margin: auto;"/>
                    <label for="formGroupExampleInput2"><h2>Price :&nbsp;&nbsp;&nbsp;Rp.<?= $product['price']; ?></h2></label>
                    <input type="hidden" name="price" id="price">
                    <br>
                    <label for="pesananBarang">Banyak Item</label>
                    <select class="form-control" name="quantity" value="0">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="submit">Tambah Item</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end Modal -->

    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="<?php echo BASE_URL; ?>/assets3/js/jquery-1.10.2.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets3/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets3/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets3/ItemSlider/js/jquery.catslider.js"></script>
    
</body>
</html>
