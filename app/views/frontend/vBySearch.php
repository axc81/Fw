
    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="beranda">Home</a>
                        </li>
                        <li>Ladies</li>
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
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="<?= BASE_URL; ?>/kategori/katLoc/local">Local<span class="badge pull-right"></span></a>
                                    <a href="<?= BASE_URL; ?>/kategori/katInt/international">International<span class="badge pull-right"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="<?= BASE_URL; ?>/img/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <img src="<?= BASE_URL; ?>/img/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                    <div class="banner">
                        <a href="#">
                            <img src="<?= BASE_URL; ?>/img/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Coffeelab</h1>
                        <p>blablablablablablalbalbal.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-8 col-sm-8">
                                            <div class="products-number">
                                                 <!-- -->
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

                        <?php foreach ($data['cari'] as $product) {?>

                        <div class="col-md-12 col-sm-12">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html"><br>
                                                <img src="<?= BASE_URL; ?>/img/<?= $product['pImage'];?>" width="600" height="600" style="display: block; margin: auto;"/>
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?= BASE_URL; ?>/img/<?= $product['pImage'];?>" width="620" height="630" style="display: block; margin: auto;"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?= BASE_URL; ?>/img/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><?= substr(strip_tags($product['pName']), 0, 22); ?></h3>
                                    <p class="price">$ &nbsp;<?= $product['pPrice']; ?></p>
                                    <p class="buttons">
                                        <a href="<?= BASE_URL; ?>/beranda/detail/<?= $product['pId']; ?>" class="btn btn-default">View detail</a>
                                        <a href="<?= BASE_URL; ?>/beranda/detail/<?= $product['pId']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <?php  }?>

                        <!-- /.col-md-12 -->
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