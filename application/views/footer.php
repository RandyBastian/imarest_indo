
            <footer class="footer" id="inline-test" contenteditable="true">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-about">
                                <img src="assets/images/footer-logo.png" alt="The Legend" class="img-responsive">
                                <p>Far far away, behind the word mount ains, far from the countries Vokalia</p>
                                <p>texts. Separated they live in Bookm arks grove right at the coast of the control about the blind texts it is an </p>
                                <a href="#">Learn more</a>
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-popular-posts">
                                <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>Popular Posts</h4>
                                <ul>
                                    <li><a href="#">My daily blog entry (259)</a></li>
                                    <li><a href="#">Unrevealed Shortcodes (223)</a></li>
                                    <li><a href="#">Developing with pleasure (204)</a></li>
                                    <li><a href="#">Communication information (199)</a></li>
                                    <li><a href="#">Beautiful Image Post (167)</a></li>
                                    <li><a href="#">Unrevealed Shortcodes (223)</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 -->
                        <div class="clearfix visible-sm"></div><!-- space -->
                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-recent-posts">
                                <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>Recent Posts</h4>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/blog/thumbs/post1.jpg" alt="Post" class="img-responsive">
                                        </a>
                                        <div>
                                            <h5><a href="#">Far far away, behind the word mountains, far.</a></h5>
                                            <span>October 1,2014</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/blog/thumbs/post2.jpg" alt="Post" class="img-responsive">
                                        </a>
                                        <div>
                                            <h5><a href="#">Far far away, behind the word mountains, far.</a></h5>
                                            <span>October 1,2014</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/blog/thumbs/post3.jpg" alt="Post" class="img-responsive">
                                        </a>
                                        <div>
                                            <h5><a href="#">Far far away, behind the word mountains, far.</a></h5>
                                            <span>October 1,2014</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 -->
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title"><i class="fa fa-angle-double-right"></i>Recent Tags</h4>
                                <div class="tagcloud">
                                    <a href="#">Awesome</a>
                                    <a href="#">Performance</a>
                                    <a href="#">Joomla</a>
                                    <a href="#">ASP.Net</a>
                                    <a href="#">SEO</a>
                                    <a href="#">SharePoint</a>
                                    <a href="#">WordPress</a>
                                    <a href="#">Awesome</a>
                                    <a href="#">Performance</a>
                                    <a href="#">Joomla</a>
                                    <a href="#">ASP.Net</a>
                                    <a href="#">SEO</a>
                                    <a href="#">SharePoint</a>
                                    <a href="#">WordPress</a>
                                </div><!-- End .tagcloud -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-right">
                            <ul class="footer-menu">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- End .footer-right -->
                        <div class="footer-left">
                            <p class="copyright">Copyright 2014 The Legend<span class="separator">l</span>Designed By <a href="#">Mohamed Said</a></p>
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
                    skinsPath: 'assets/css/skins/',
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
        
    </body>
</html>