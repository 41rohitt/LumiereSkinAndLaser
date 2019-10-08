<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="logo-ft-block">
                            <div class="ft-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo">
                            </div>
                            <div class="ft-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/img/coolsculpting-logo.png" alt="logo">
                            </div>
                            <div class="ft-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/img/syneron-candela.png" alt="logo">
                            </div>
                            <div class="ft-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/img/botoxcosmetic.png" alt="logo">
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="ft-links">
                            <h3>Contact Us</h3>
                            <div class="ft-address">
                                <ul>
                                    <li>
<a class="button" href="#popup1" href="contact.html"><p>8345 Greensboro Drive,<br>McLean VA 22102</p></a>
                                    </li>
                                    <li><a href="mailto:admin@lumiereskinandlaser.com">admin@lumiereskinandlaser.com</a></li>
                                    <li><a href="tel:7033568001" class="ft-phone">703-356-8001</a></li>
                                    <li><p>Monday-Friday 9AM to 8PM<br>Saturday-Sunday 9AM to 5PM</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="ft-links">
                            <h3>Helpful Links</h3>
                            <div class="ft-nav">
                                <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li><a href="<?php echo get_page_link(10); ?>">About Us</a></li>
                        <li><a href="<?php echo get_page_link(12); ?>">Treatments</a>
                        <li><a href="<?php echo get_home_url(14); ?>">Prices / Financing</a></li>
                                    
                                </ul>
                                <ul>
                        <li><a href="<?php echo get_page_link(16); ?>">Promotions</a></li>
                        <li><a href="<?php echo get_page_link(18); ?>">Before & After</a></li>
                        <li><a href="<?php echo get_page_link(20); ?>">Referral Plan</a></li>
                        <li><a href="<?php echo get_page_link(22); ?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="ft-links">
                            <h3>Photo Tour</h3>
                            <div class="ft-photos">
                                <ul class="clearfix">
                                    <li><a href="<?php echo get_page_link(51); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/photo1.JPG" alt="photo"></a></li>
                                    <li><a href="<?php echo get_page_link(51); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/photo2.JPG" alt="photo"></a></li>
                                    <li><a href="<?php echo get_page_link(51); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/photo3.JPG" alt="photo"></a></li>
                                    <li><a href="<?php echo get_page_link(51); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/photo4.JPG" alt="photo"></a></li>
                                    <li><a href="<?php echo get_page_link(51); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/photo5.JPG" alt="photo"></a></li>
                                    <li><a href="<?php echo get_page_link(51); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/photo6.JPG" alt="photo"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="copyrights">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>&copy; 2019  Lumiere Skin and Laser. All rights reserved.</p>
                        </div>
                        <div class="col-xs-6">
                            <div class="powered-by pull-right">
                                <span>Powered  by</span>
                                <a  href="http://www.pollysys.com/"><img src="<?php bloginfo('template_directory'); ?>/img/pollysys-logo.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="sticky-container">
		<ul class="sticky footer-primary-social">
			<!--<li class="icon phone"><a target="_blank" href="#">(703) 812-5025</a></li>-->
            <li class="icon ggl"><a target="_blank" href="#">Google Plus</a></li>
            <li class="icon fb"><a target="_blank" href="#">Facebook</a></li>
            <li class="icon in"><a target="_blank" href="#">Instagram</a></li>
        	<li class="icon yelp"><a target="_blank" href="#">Yelp</a></li>
			<li class="icon ytb"><a href="#" target="_blank">Youtube</a></li>
	</ul>
	</div>
    
    <div id="popup1" class="overlay">
	<div class="popup">
		<h2><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24830.894455086378!2d-77.232279!3d38.927136!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64af49bc75535%3A0xea8139d1e3b8ae34!2s8345+Greensboro+Dr%2C+McLean%2C+VA+22102!5e0!3m2!1sen!2sus!4v1512041253461" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
       

<?php wp_footer(); ?>
</body>
</html>
