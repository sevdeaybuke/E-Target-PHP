

<?php 

if (basename($_SERVER['PHP_SELF'])==basename(__FILE__)) {
    
    exit("Bu sayfaya erişim yasak");
}

 ?>
<!-- Footer Area Start Here -->
            <footer>
                <div class="footer-area-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">İletişim</h3>
                                    <ul class="corporate-address">
                                        
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $ayarcek['ayar_gsm'] ?></li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $ayarcek['ayar_tel'] ?></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $ayarcek['ayar_mail'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-left title-bar-footer">Takip Edin</h3>
                                    <ul class="footer-social">
                                        <li><a href="<?php echo $ayarcek['ayar_facebook'] ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $ayarcek['ayar_twitter'] ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $ayarcek['ayar_youtube'] ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $ayarcek['ayar_google'] ?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <p><?php echo $ayarcek['ayar_author'] ?></p>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        <!-- Main Body Area End Here -->
        <!-- jquery-->  
        <script src="js\jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js\plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="js\bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="js\wow.min.js"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor\OwlCarousel\owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="js\jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js\jquery.scrollUp.min.js" type="text/javascript"></script>

        <!-- Select2 Js -->
        <script src="js\select2.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js\jquery.counterup.min.js"></script>
        <script src="js\waypoints.min.js"></script>

        <!-- Isotope js -->
        <script src="js\isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Gridrotator js -->
        <script src="js\jquery.gridrotator.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js\main.js" type="text/javascript"></script>

    </body>
</html>
