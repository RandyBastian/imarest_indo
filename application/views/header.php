<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>IMarEST Indonesia</title>
        <meta name="description" content="IMarEST Indonesia">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo site_url();?>assets/css/plugins.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>assets/css/layerslider.css">
        <link rel="stylesheet" href="<?php echo site_url();?>assets/css/style.css">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo site_url();?>assets/images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url();?>assets/images/icons/faviconx57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url();?>assets/images/icons/faviconx72.png">
    </head>
    <body class="push-menu">
        <div id="mobile-menu-container">
            <div class="mobile-menu-title">NAVIGATION <a href="" id="mobile-menu-close">&times;</a></div>
            <ul class="mobile-menu">
                <li class="active">
                    <a href="#">Membership<span class="arrow"></span></a>
                    <ul>
                        <li><a href="<?php echo site_url("membership");?>">Membership & Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Resources<span class="arrow"></span></a>
                     <ul>
                        <li class="reverse">
                            <a href="<?php echo site_url("news-room");?>">News Room</a>
                        </li>
                        <li class="reverse">
                            <a href="http://www.imarest.org/resources/the-virtual-library" target="_blank">Virtual Library</a>
                        </li>
                        <li class="reverse">
                            <a href="http://www.imarest.org/resources/book-publications" target="_blank">Book Publications</a>
                        </li>
                        <li class="reverse">
                            <a href="http://www.imarest.org/resources/book-publications" target="_blank"><img src="<?php echo site_url();?>/assets/images/IMarESTTVButton.png"></a>
                        </li>
                        <li class="reverse">
                            <a href="http://www.imarest.org/themarineprofessional" target="_blank"><img src="<?php echo site_url();?>/assets/images/magazine.png"></a>
                        </li>
                        <li class="reverse">
                            <a href="https://www.mla-uk.com/" target="_blank"><img src="<?php echo site_url();?>/assets/images/MLAButton.png"></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Events<span class="arrow"></span></a>
                    <ul>
                        <li><a href="<?php echo site_url("event-conferences"); ?>">Events & Conferences</a></li>
                        <li><a href="<?php echo site_url("training-courses"); ?>">Training Courses</a></li>
                        <li><a href="https://www.mla-uk.com/" target="_blank"><img src="<?php echo site_url();?>assets/images/MLAButton.png"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url("careers"); ?>">Careers</a>
                </li>
                <li>
                    <a href="#">Gallery<span class="arrow"></span></a>
                    <ul>
                        <li><a href="<?php echo site_url("photo-gallery");?>">Photo</a></li>
                        <li><a href="<?php echo site_url("video-gallery");?>">Video</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url("faq");?>">FAQ<span>Tanya Jawab</span></a>
                </li>
            </ul>
        </div><!-- End #mobile-menu-container -->
        <div id="mobile-menu-overlay"></div><!-- End #mobile-menu-overlay -->
        <div id="wrapper">
            <header class="header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <div class="header-infos">
                                <span><i class="fa fa-mobile"></i>0877-0000-0000</span>
                                <span class="separator">|</span>
                                <a href="mailto:#" title="info.imarestindonesia@gmail.com"><i class="fa fa-envelope-o"></i>info.imarestindonesia@gmail.com</a>
                            </div><!-- End .header-info -->
                        </div><!-- End .header-left -->
                        <div class="header-right">
                            <div class="social-icons" id="link_to_imarest">
                                <a href="http://www.imarest.org/membership-application">LOGIN</a>
                                <a href="http://www.imarest.org/membership-application">REGISTER</a>
                            </div><!-- End .social-icons -->
                        </div><!-- End .header-right -->
                    </div><!-- End. container -->
                </div><!-- End.header-top -->
                <div class="header-inner sticky-menu">
                    <div class="container">
                        <div class="header-left">
                            <a href="<?php echo site_url();?>" class="site-logo" title="IMarEST Indonesia Logo">
                                <img src="<?php echo site_url();?>assets/images/logo.png" alt="Logo">
                            </a>
                        </div><!-- End .header-left -->
                        <div class="header-right">
                            <a href="#" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="dropdown search-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Enter your search...">
                                        <button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
                                    </form>
                                </div><!-- End. dropdown-menu -->
                            </div><!-- End. dropdown -->
                            <nav class="menu-container">
                                <ul class="menu">
                                    <li class="active">
                                        <a href="#">Membership<i class="fa fa-angle-down"></i><span>Careers, Awards & Registration</span></a>
                                        <ul>
                                            <li><a href="<?php echo site_url("membership");?>">Membership & Registration</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Resources<i class="fa fa-angle-down"></i><span>Virtual Library & Book Publications</span></a>
                                         <ul>
                                            <li class="reverse">
                                                <a href="<?php echo site_url("news-room");?>">News Room</a>
                                            </li>
                                            <li class="reverse">
                                                <a href="http://www.imarest.org/resources/the-virtual-library" target="_blank">Virtual Library</a>
                                            </li>
                                            <li class="reverse">
                                                <a href="http://www.imarest.org/resources/book-publications" target="_blank">Book Publications</a>
                                            </li>
                                            <li class="reverse">
                                                <a href="http://www.imarest.org/resources/book-publications" target="_blank"><img src="<?php echo site_url();?>/assets/images/IMarESTTVButton.png"></a>
                                            </li>
                                            <li class="reverse">
                                                <a href="http://www.imarest.org/themarineprofessional" target="_blank"><img src="<?php echo site_url();?>/assets/images/magazine.png"></a>
                                            </li>
                                            <li class="reverse">
                                                <a href="https://www.mla-uk.com/" target="_blank"><img src="<?php echo site_url();?>/assets/images/MLAButton.png"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Events<i class="fa fa-angle-down"></i><span>Courses & Conferences</span></a>
                                        <ul>
                                            <li><a href="<?php echo site_url("event-conferences"); ?>">Events & Conferences</a></li>
                                            <li><a href="<?php echo site_url("training-courses"); ?>">Training Courses</a></li>
                                            <li><a href="https://www.mla-uk.com/" target="_blank"><img src="<?php echo site_url();?>assets/images/MLAButton.png"></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("careers"); ?>">Careers<span>Jobs</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery<i class="fa fa-angle-down"></i><span>Photo & Video Decumentation</span></a>
                                        <ul>
                                            <li><a href="<?php echo site_url("photo-gallery");?>">Photo</a></li>
                                            <li><a href="<?php echo site_url("video-gallery");?>">Video</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("faq");?>">FAQ<span>Tanya Jawab</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- End .header-right -->
                    </div><!-- End. container -->
                </div><!-- End .header-inner -->
            </header><!-- End .header -->
            