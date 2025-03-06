<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $data['title']; ?> </title>

    <!-- Bootstrap -->
    <link href="<?= BASE_URL; ?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= BASE_URL; ?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= BASE_URL; ?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= BASE_URL; ?>/assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= BASE_URL; ?>/assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= BASE_URL; ?>/LoginSuper/check">
              <h1>Login Super Admin</h1>
              <?php Flasher::flashLogin(); ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Login" name="LoginSuper">
                <a class="reset_pass" href="">CoffeeLab Home</a>
              </div>
              <div class="clearfix"></div>
               <div class="separator">
            </form>
            <h1><i class="fa fa-smile-o"></i>  HALLO BOS <i class="fa fa-smile-o"></i></h1>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
