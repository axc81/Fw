        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>

                    <div class="modal-body">
                        <form action="<?= BASE_URL; ?>/Userlogin/Userin" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username-modal" placeholder="username" name="uUsername">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="uPassword">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary" type="submit" value="login" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Belum Mendaftar ?</p>
                        <p class="text-center text-muted"><a href="<?= BASE_URL; ?>/Register"><strong>Daftar Sekarang</strong></a>! Temukan biji kopi terbaik dan berkualitas di coffeeLab !</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Halaman</h4>

                        <ul>
                            <li><a href="">Tentang CoffeeLab</a>
                            </li>
                            </li>
                            <li><a href="">Hubungi Kami</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="<?= BASE_URL; ?>/Register/">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Categories</h4>
                        <ul>
                            <li><a href="<?= BASE_URL; ?>/beranda/kategori/computer">Local</a></li>
                            <li><a href="<?= BASE_URL; ?>/beranda/kategori/computer">International</a></li>

                        </ul>
                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Dapat dikunjungi</h4>

                        <p><strong>CoffeeLab.</strong>
                            <br>Madidir Weru
                            <br>Kota Bitung
                            <br>95514
                            <br>Sulawesi Utara
                            <br>
                            <strong>Indonesia</strong>
                        </p>
                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Dapatkan informasi terbaru</h4>
                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">© 2020 CoffeeLab</p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->


    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="<?= BASE_URL; ?>/js/js/jquery-1.11.0.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/jquery.cookie.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/waypoints.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/modernizr.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/bootstrap-hover-dropdown.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/owl.carousel.min.js"></script>
    <script src="<?= BASE_URL; ?>/js/js/front.js"></script>


