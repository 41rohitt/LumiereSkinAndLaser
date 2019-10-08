<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.js"></script>
   		<script src="<?php bloginfo('template_directory'); ?>/js/css3-mediaqueries.js"></script>
		
		 <script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
        <script>
            $(".regular").slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                autoplay: 9000,
                speed: 1200,
                slidesToScroll: 1
            });
            
            $(document).ready(function(){
                $('.navbar-toggle').on('click', function(e) {
                  $('.navbar-collapse').toggleClass("open-nav"); //you can list several class names 
                  e.preventDefault();

                  $('.color-overlay-bg').toggleClass('show-bg'); 

                });
            });

            $(document).ready(function(){
                $('.color-overlay-bg').on('click', function() {
                  $(this).removeClass('show-bg'); 
                  $('.navbar-collapse').removeClass("open-nav");
                });
            });

            $(window).scroll(function() {
              if ($(this).scrollTop() > 1){  
                $('header').addClass("sticky");
                $('.height-div').addClass("sticky");
              }
              else{
                $('header').removeClass("sticky");
                $('.height-div').removeClass("sticky");
              }
            });
            
            $(document).ready(function(){
                $('.navbar-nav>li>.angle-down').on('click', function(){
                    $('.navbar-nav>li .dropdown').slideUp(600);
                    $(this).next('.dropdown').slideDown(600);
                    $(this).addClass('active');
                });
            });
            
        </script>
        <script>
$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

</script>
        <script>
	$(window).scroll(function() {
if ($(this).scrollTop() > 40){  
     $('.header').addClass("fix_header");
  }
  else{
    $('.header').removeClass("fix_header");
  }
});
        </script>
        
		
		<?php wp_head(); ?>
		
    </head>
    <body>
        <header>
            <div class="top-header-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-4">
                            <div class="select-lang">
                                <form>
                                    <select style="background-image: url(<?php bloginfo('template_directory'); ?>/img/select-arrow.png); background-repeat: no-repeat;">
                                        <option>English</option>
                                        <option>Spanish</option>
                                        <option>French</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-8">
                            <div class="top-right pull-right clearfix">
                                <div class="cool-logo pull-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/coolsculpting-logo.png" alt="coolsculpting logo">
                                </div>
                                <div class="social-media pull-left">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/syneron-candela.png" alt="syneron-candela">
                                </div>
                                <div class="botoxcosmetic pull-left hidden-xs">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/botoxcosmetic.png" alt="botoxcosmetic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-header-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-5">
                            <div class="logo">
                                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="lumriere logo"></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-7">
                            <div class="header-address">
                                <ul class="clearfix">
                                    <li>
                                    <a class="button" href="#popup1" href="contact.html">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <p>8345 Greensboro Drive,<br>McLean VA 22102</p>
                                    </a>
                                    </li>
                                    <li>
<div class="free-conslt"><a href="tel:7033568001"><h3>Free Consultation <br>703-356-8001</h3> </a></div>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        <p>Monday-Friday 9AM to 8PM<br>Saturday-Sunday 9AM to 5PM</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navigation">
                <nav class="navbar navbar-default navbar-static-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                      <div class="mob-logo hidden">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="lumriere logo"></a>
                      </div>
                      <ul class="nav navbar-nav">
					  
					  
                        <li <?php if (is_front_page()) { echo " class=\"active\""; }?>><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li <?php if (is_page(10)) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(10); ?>">About Us</a></li>
                        <li <?php if ( is_page(12) || is_page() && $post->post_parent ) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(12); ?>">Treatments</a>
                            <span class="angle-down hidden"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="<?php echo get_page_link(24); ?>">Laser Hair Removal</a></li>
                                    <li><a href="<?php echo get_page_link(26); ?>">CoolSculpting / Body Contouring</a></li>
                                    <li><a href="<?php echo get_page_link(28); ?>">Botox & Fillers</a></li>
                                    <li><a href="<?php echo get_page_link(30); ?>">Velashape III / Cellulite</a></li>
                         			<li><a href="<?php echo get_page_link(32); ?>">IPL / FotoFacials</a></li>
                                    <li><a href="<?php echo get_page_link(34); ?>">Laser Skin Rejuvenation</a></li>
                                    <li><a href="<?php echo get_page_link(36); ?>">Anti Aging</a></li>
                                    <li><a href="<?php echo get_page_link(38); ?>">Chemical Peels</a></li>
                                    <li><a href="<?php echo get_page_link(40); ?>">Skin Tags / Cherry Angioma</a></li>
                                </ul>
                            </div>
                        </li>
                        <li <?php if (is_page(14)) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(14); ?>">Prices / Financing </a>
                            <span class="angle-down hidden"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las1">Laser Hair Removal</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las2">CoolSculpting / Body Contouring</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las3">Botox & Fillers</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las4">Velashape III / Cellulite</a></li>
                         			<li><a href="<?php echo get_page_link(14); ?>/#las5">IPL / FotoFacials</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las6">Laser Skin Rejuvenation</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las7">Anti Aging</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las8">Chemical Peels</a></li>
                                    <li><a href="<?php echo get_page_link(14); ?>/#las9">Skin Tags / Cherry Angioma</a></li>
                                </ul>
                            </div>
                        </li>
                        <li <?php if (is_page(16)) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(16); ?>">Promotions</a></li>
                        <li <?php if (is_page(18)) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(18); ?>">Before & After</a></li>
                        <li <?php if (is_page(20)) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(20); ?>">Referral Plan</a></li>
                        <li <?php if (is_page(22)) { echo " class=\"active\""; }?>><a href="<?php echo get_page_link(22); ?>">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="color-overlay-bg"></div>
                </nav>
            </div>
        </header>
        
        <div class="height-div"></div>