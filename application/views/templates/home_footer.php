    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="<?= base_url('contact'); ?>" target="_blank" method="post" role="form">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="hidden" name="noWa" class="form-control" id="noWa" value="6285335885648" readonly data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>BizPage</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
                            darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo.
                            Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore
                        legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div> -->

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/superfish/hoverIntent.js"></script>
    <script src="<?= base_url(); ?>assets/lib/superfish/superfish.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url(); ?>assets/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

    </body>

    </html>