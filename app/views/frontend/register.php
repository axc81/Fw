    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>

                        <hr>

                        <form action="<?php echo BASE_URL;?>/Register/cekUser" method="post">
                            <div class="form-group">
                                <label for="First Name">First sName</label>
                                <input type="text" class="form-control" id="uFirstName" name="uFirstName">
                            </div>
                            <div class="form-group">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="uLastName" name="uLastName">
                            </div>
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="uAddress" name="uAddress">
                            </div>
                            <div class="form-group">
                                <label for="City">City</label>
                                <input type="text" class="form-control" id="uCity" name="uCity">
                            </div>
                            <div class="form-group">
                                <label for="Phone">Phone</label>
                                <input type="text" class="form-control" id="uPhone" name="uPhone">
                            </div>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="uUsername" name="uUsername">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="uPassword" name="uPassword">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <hr>

                        <form action="<?= BASE_URL; ?>/Userlogin/Userin" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="uUsername">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="uPassword">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
