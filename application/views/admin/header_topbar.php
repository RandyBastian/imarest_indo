<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Imarest Indonesia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">

    <link href="<?php echo base_url() ?>assets/admin/jtable/jtable/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/admin/jtable/jtable/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url() ?>assets/admin/plugins/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/plugins/ckeditor/adapters/jquery.js"></script>

    <script src="<?php echo base_url() ?>assets/admin/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/admin/jtable/jtable/jquery.jtable.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="#" class="navbar-brand"><b>Admin</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="<?=site_url("admin/news")?>">News</a>
                </li>
                <li class="dropdown">
                  <a href="<?=site_url("admin/halaman")?>">Halaman</a>
                </li>
                <li class="dropdown">
                  <a href="<?=site_url("admin/careers")?>">Careers</a>
                </li>
                <li class="dropdown">
                  <a href="<?=site_url("admin/faq")?>" >FAQ</a>
                </li>
                <li class="dropdown">
                    <a href="<?=site_url("admin/kontak")?>">Kontak</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event, Course, and Training<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=site_url("admin/event")?>">Event and Confrence</a></li>
                    <li><a href="<?=site_url("admin/training")?>">Training</a></li>
                    <li><a href="<?=site_url("admin/Negara")?>">Negara</a></li>
                    <li><a href="<?=site_url("admin/Kota")?>">Kota</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeri<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=site_url("admin/Upload")?>">Foto</a></li>
                    <li><a href="<?=site_url("admin/video")?>">Video</a></li>
                  </ul>
                  
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                        <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        <p>
                          Admin
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-center">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->