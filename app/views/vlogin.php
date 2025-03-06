
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Please Sign In</h3>
                    <!---MESSAGE SESSION--->
                      <div class="row">
                        <div class="col-lg-12">
                          <?php Flasher::flashLogin(); ?>
                        </div>  
                      </div>
                    <!---END SESSION--->
                    
            </div>
                <div class="panel-body"> 
                <form method="post" action="<?= BASE_URL; ?>/Login/login_process">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                                <font color ="red"><p></p></font>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                                <font color ="red"><p></p></font>
                        </div>
                            <input type="submit" class="btn btn-lg btn-warning btn-block" value="Login" name="login">
                                <a href="home"  class="btn btn-lg btn-danger btn-block" value="">Home</a>
                         </fieldset>
                </form>
                </div>
        </div>
    </div>
</div>



                