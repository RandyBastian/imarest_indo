<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Imarest Indonesia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/login/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
    <div class="pen-title">
      <h1>Imarest Indonesia Login Form</h1>
    </div>
    <div class="module form-module">
      <div class="toggle">
      </div>
      <div class="form">
        <h2>Login to your account</h2>

        <?php
                $text = site_url("admin/verifikasi_login") ;
                echo form_open_multipart($text);
          ?>
          <div style="padding:20px">
              <?php
                  if(isset($_GET['status']) && $_GET['status'] == 0)
                  {
                      echo "<div class='alert alert-danger'  role='alert'>";
                      echo "<a class='close' data-dismiss='alert' aria-hidden='true'>&times;</a>";
                      echo "Pastikan username & password benar";
                      echo "</div>";
                  }
              ?>
                  <p>
                      <label for="username"><strong>Username</strong></label>
                      <input type="text" name="username" id="username">
                  </p>
                  <p>
                      <label for="password"><strong>Password</strong></label>
                      <input type="password" name="password" id="password" value="">
                  </p>
              </div>
              <p class="p-container">
                  <input class="login" type="submit" name="go" id="go" value="Log in">
              </p>
              <?php
                  echo form_close();
              ?>
 </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url() ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue'
        });
      });
    </script>
  </body>
</html>
