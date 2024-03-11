<?php wp_footer();

// Footer 
$footercopy = get_field('footer_copyright');



?>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="containerr ">

    <footer class=" text-center text-white">
        <!-- Grid container -->
        <div class="container-fluid v-center d-flex">
            <div class="logo-container col-md-4 col-sm-5 col-xs-6 d-flex align-items-center">
                <div class="logo">
                    <img src="https://thebmegroup.com/wp-content/themes/bme/img/logo.png">
                </div>
            </div>



            <div class="col-md-8 col-sm-7 col-xs-12 d-flex flex-column ">
                <div class="subscribe  d-flex">
                    <p>Subscribe to our newsletter</p>
                    <div class="suscribeForm">

                        <form class="customValid" method="post" action="http://localhost:10102/?na=s">

                            <input type="hidden" name="nlang" value="">
                            <div class="tnp-field tnp-field-email"><label for="tnp-1"></label>
                                <input id="newsletter_mail" class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="Enter your email Address" required="">
                            </div>
                            <div class="tnp-field tnp-field-button">
                                <button type="submit">Subscribe <i class="fa-solid fa-chevron-right "></i></button>
                            </div>
                        </form>
                        <!-- <form class="customValid" novalidate="novalidate">
                            <input id="newsletter_mail" name="email" type="email" class="input" placeholder="Enter your email Address">
                            <button type="submit">Subscribe <i class="fa-solid fa-chevron-right "></i></button>
                        </form> -->
                    </div>
                </div>
                <div class="followUs ">
                    <p class="icons  mt-3">
                        <span class="followusTitle mr-2">Follow us</span>
                            <div class="social-icon">
                            <a href="https://www.facebook.com/bme.global" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                         <a href="https://www.linkedin.com/company/bmeglobal/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                          <a href="https://www.instagram.com/bme.global" target="_blank"><i class="fa-brands fa-instagram"></i> </a>
                           <a href="https://twitter.com/BMEGlobal_" target="_blank"><i class="fa-brands fa-twitter"></i> </a>
                            
                           <span class="clearfix hidden-sm hidden-md hidden-lg"></span>
                           <a href="http://res184.servconfig.com/~bmeadmin201/wp-content/uploads/2018/07/BME-Events-Privacy-Policy.pdf">Privacy Policy</a>
                        <a href="http://res184.servconfig.com/~bmeadmin201/wp-content/uploads/2018/07/BME-Events-Website-Policy.pdf">Website policy</a>
                        </div>
                      


                       
                    </p>
                </div>

            </div>


        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="container-fluid footer">
            <div class="col-md-6 col-sm-4 col-xs-12 mt-4">
                <div class="copyrights ">
                    <?php if ($footercopy) : ?>
                        <p> <?php echo($footercopy);?> </p>


                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="bni">
                    <!-- <a href="https://www.bni.agency" target="_blank"><img src="https://thebmegroup.com/wp-content/themes/bme/img/bni.png"></a> -->
                </div>
            </div>
        </div>
        <!-- Copyright -->
    </footer>

</div>
<!-- End of .container -->




</body>

</html>