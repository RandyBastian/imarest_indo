<footer class="footer" id="inline-test">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>About</h4>
                    <img src="<?php echo site_Url();?>assets/images/logo.png" alt="Logo IMarEST Indonesia" class="img-responsive">
                    <br>
                    <ul>
                        <li><a href="<?php echo site_url("profile");?>" style="color:#73a6da;">Our Profile</a></li>
                        <li><a href="<?php echo site_url("contact-us"); ?>" style="color:#73a6da;">Contact Us</a></li>
                        <li><a href="<?php echo site_url("privacy-policy"); ?>" style="color:#73a6da;">Privacy Policy</a></li>
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>IMarEST</h4>
                    <ul>
                        <li><i class="fa fa-shopping-cart"></i> eSHOP</li>
                        <a href="http://eshop.imarest.org/" target="_blank" style="color:#73a6da;"><i class="fa fa-caret-right"></i> Online Store</a>
                        <br>
                        <br>
                        <li><i class="fa fa-group"> Community</i></li>
                        <a style="color:#73a6da;" href="http://www.imarest.org/communities/special-interest-groups" target="_blank"><i class="fa fa-caret-right"> Special Interest Groups</i></a>
                        <li> <a style="color:#73a6da;" href="http://www.imarest.org/local-communities" target="_blank"><i class="fa fa-caret-right"> Local Communities</i></a></li>
                        <li><a style="color:#73a6da;" href="http://www.imarest.org/marinepartners" target="_blank"><i class="fa fa-caret-right"> Marine Partners</i></a></li>
                        <li><a style="color:#73a6da;" href="http://www.imarest.org/nexus" target="_blank"><i class="fa fa-caret-right"> The IMarEST Nexus</i></a></li>
                        <li><a style="color:#73a6da;" href="http://www.imarest.org/policy-news/consulting-members" target="_blank"><i class="fa fa-caret-right"> Consulting Our Members</i></a></li>
                        <br> <br>
                         <li><i class="fa fa-book"> MAGAZINE</i></li>
                        <a target="_blank" href="http://www.imarest.org/themarineprofessional">
                            <img src="<?php echo site_Url();?>assets/images/magazine.png" alt="IMarEST Magazine" class="img-responsive">
                        </a>
                        <br>
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 -->
            <div class="clearfix visible-sm"></div><!-- space -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>Sites</h4>
                    <ul>
                        <li><i class="fa fa-calendar-o"> EVENTS & CONFERENCES</i></li>
                        <a href="<?php echo site_url("event-conferences"); ?>" style="color:#73a6da;"><i class="fa fa-caret-right"> Events & Conferences</i></a>
                        <br />
                        <br>
                        <li><i class="fa fa-calendar-o"> TRAINING COURSES</i></li>
                        <a href="<?php echo site_url("training-courses"); ?>" style="color:#73a6da;"><i class="fa fa-caret-right"> Training Courses</i></a>
                        <br />
                        <br>
                        <li><i class="fa fa-ship">CAREERS</i></li>
                        <a href="<?php echo site_url("jobs"); ?>" style="color:#73a6da;"><i class="fa fa-caret-right"> Jobs Board</i></a>
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>Quick Links</h4>
                    <ul>
                        <li><i class="fa fa-th"> RESOURCES</i></li>
                        <li><a href="#" style="color:#73a6da;"><i class="fa fa-caret-right"> Newsroom</i></a></li>
                        <li><a href="http://www.imarest.org/resources/the-virtual-library" target="_blank" style="color:#73a6da;"><i class="fa fa-caret-right"> Virtual Library</i></a></li>
                        <br>
                        <br>
                        <li><i class="fa fa-question"> FIND HELP</i></li>
                        <li><a href="#" style="color:#73a6da;"><i class="fa fa-caret-right"> Frequently Asked Questions</i></a></li>
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-right">
                <ul class="footer-menu">
                    <li><a href="<?php echo site_url("privacy-policy"); ?>">Privacy Policy</a></li>
                </ul>
            </div><!-- End .footer-right -->
            <div class="footer-left">
                <p class="copyright">Copyright 2016 IMarEST Indonesia</p>
            </div><!-- End .footer-left -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End #wrapper -->
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>
<!-- End -->
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/twitter/jquery.tweet.min.js"></script>
<!-- LayerSlider script files -->
<script src="assets/js/greensock.js"></script>
<script src="assets/js/layerslider.transitions.js"></script>
<script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
<!-- LayerSlider script files -->
<script src="assets/js/main.js"></script>
<script src="builder/builder.js"></script>
<script>
    $(function() {
        'use strict';
        $('#layerslider').layerSlider({
            responsiveUnder : 1200,
            layersContainer : 1200,
            
            navButtons: true,
            navStartStop:false,
            showCircleTimer: true,
            thumbnailNavigation:'disabled',
            skin: 'thelegend' // assets/css/skins folder
        });
    });
</script>
<script src="builder/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.inline('inline-test', {
        extraPlugins: 'sourcedialog',
        allowedContent: true
        }
    );
</script>
<body>
</html>