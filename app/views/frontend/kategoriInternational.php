
    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?= BASE_URL; ?>">Home</a>
                        </li>
                        <li><?= $data['title_kategori']; ?></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked kategori-menu">
                                <li>
                                    <a href="<?= BASE_URL; ?>/kategori/katInt/international">International<span class="badge pull-right"><?= $data['show']; ?></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="<?= BASE_URL; ?>/img/img/ban1.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <img src="<?= BASE_URL; ?>/img/img/ban2.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <img src="<?= BASE_URL; ?>/img/img/ban3.png" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Coffeelab</h1>
                        <p>Temukan Biji Kopi International Terbaik Hanya Di COFFEELAB.</p>
                       
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <?= $data['paginationCats'];  ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

                        <?php foreach ($data['international'] as $product) {?>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                                <br>
                                                <img src="<?= BASE_URL; ?>/img/<?= $product['pImage'];?>" width="200" height="300" style="display: block; margin: auto;"/>
                                            </a>
                                        </div>
                                        <div class="back">
                                            
                                                <img src="<?= BASE_URL; ?>/img/<?= $product['pImage'];?>" width="220" height="330" style="display: block; margin: auto;"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="invisible">
                                    <img src="<?= BASE_URL; ?>/img/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><?= substr(strip_tags($product['pName']), 0, 22); ?></h3>
                                    <p class="price">USD&nbsp;$<?= $product['pPrice']; ?></p>
                                    <p class="buttons">
                                        <a href="<?= BASE_URL; ?>/beranda/detail/<?= $product['pId']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>View Detail</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <?php  }?>

                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</body>

</html>