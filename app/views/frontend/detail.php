    <script src="<?= BASE_URL; ?>/js/js/jquery-1.11.0.min.js"></script>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?= BASE_URL; ?>">Home</a>
                        </li>
                        <li><?= $data['pro']['pCategory']; ?></li>
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
                                    <a href="category.html">Local<span class="badge pull-right"></span></a>
                                    <a href="">International<span class="badge pull-right"></span></a>
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
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="<?= BASE_URL; ?>/img/<?= $data['pro']['pImage']; ?>" alt="" width="340" height="600" style="display: block; margin: auto;">
                            </div>

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            
                            <form action="<?= BASE_URL; ?>/Keranjang/postItem" method="post" enctype="multipart/form-data">
                                <div class="box">
                                    <input type="hidden" name="uId" value="<?= $_SESSION['uUsername']; ?>">
                                    <input type="hidden" name="pId" value="<?= $data['pro']['pId']; ?>">

                                    <h1 class="text-center"><?= $data['pro']['pName']; ?></h1>
                                    <p class="goToDescription" class="scroll-to"><?= $data['pro']['pDescription']; ?>
                                    </p>
                                    <div class="form-group">
                                        <label class="col-lg-6 control-label">Price </label>
                                        <div class="col-lg-6">
                                          <input type="text" name="pPrice" id="price" class="form-control" readonly value="<?= $data['pro']['pPrice']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-6 control-label">quantity</label>
                                        <div class="col-lg-6">
                                        <input type="text" name="quantityToOrder" id="quantity" class="form-control" min="1"  value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-6 control-label">total</label>
                                        <div class="col-lg-6">
                                          <input type="text" name="total" id="total" style="background-color: #F48181;"class="form-control" value="0" readonly value="0">
                                        </div>
                                    </div>
                                                                        
                                 <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</button> 
                               
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>
    <!-- /#all -->

<script>
 $("#price").keyup(function(){
   var a = parseInt($("#price").val());
   var b = parseInt($("#quantity").val());
   var c = a*b;
   $("#total").val(c);
 });
 
 $("#quantity").keyup(function(){
   var a = parseInt($("#price").val());
   var b = parseInt($("#quantity").val());
   var c = a*b;
   $("#total").val(c);
 });
</script>