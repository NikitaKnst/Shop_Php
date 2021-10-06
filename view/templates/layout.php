<html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="public/css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="public/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="public/css/responsive.css" />
<!-- colors css --> 
<link rel="stylesheet" href="public/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="public/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="public/css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="public/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="public/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="public/revolution/css/navigation.css" />
<!-- map js -->
<!--ИЗМЕНЕННО-->

      <!--ИЗМЕНЕННО СВЕРХУ-->
<!-- google map js -->

</head>

<body id="default_theme" class="it_service">
	<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight" style="height:800px; width: 800px;"> Kutse 13, Jõhvi, 41533 Ida-Viru maakond</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">ida-Tesch@gmail.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="make_appointment.html">Make Appointment</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
            <!-- logo изменить под размеры -->
          <div class="logo"> <a href="it_home"><img src="images/Logo/45.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="home">Home</a>
                  <ul>
                    <li><a href="home">It Home Page</a></li>
                    <li><a href="it_home_dark.html">It Dark Home Page</a></li>
                  </ul>
                </li>
                <li><a href="about_us">About Us</a></li>
                <li> <a href="service">Service</a>
                  <ul>
                    <li><a href="it_service_list.html">Services list</a></li>
                    <li><a href="it_service_detail.html">Services Detail</a></li>
                  </ul>
                </li>
                <li> <a href="it_News">News</a>
                 
                
                </li>
                <li> <a href="#">Pages</a>
                  <ul>
                    <li><a href="career">Career</a></li>
                    <li><a href="faq">Faq</a></li>
                    <li><a href="privacy">Privacy Policy</a></li>
                    <li><a href="it_error.html">Error 404</a></li>
                  </ul>
                </li>
                <li> <a href="it_shop">Shop</a>
                  <ul>
                    <li><a href="it_shop.html">Shop List</a></li>
                    <li><a href="it_shop_detail.html">Shop Detail</a></li>
                    <li><a href="it_cart.html">Shopping Cart</a></li>
                    <li><a href="it_checkout.html">Checkout</a></li>
                  </ul>
                </li>
                <li> <a href="contact">Contact</a>
                </li>
                <?php
                 if(!isset($_SESSION['role'])){ 
      ?>
                <li> <a href="login">Login</a>
                  <?php }
elseif(isset($_SESSION['role'])){
  if($_SESSION['role']=='admin'){
    echo '<li> <a href= "adminpanel/" target=_blank>Admin panel</a></li>';
  }
?>
                </li>
              </ul>

<?php echo $_SESSION['name'] ?>
<?php } ?>




            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<main>
	<?php
		if(isset($content))
			{
				echo $content;
			}
      ///////////////////////////////
        
		?>


  
</main>
	<footer class="footer_style_2">
		  <div class="container-fuild">
		    <div class="row">
		      <div class="map_section">
		        <div id="map"></div>
		      </div>
		      <div class="footer_blog">
		        <div class="row">
		          <div class="col-md-6">
		            <div class="main-heading left_text">
		              <h2>It Next Theme</h2>
		            </div>
		            <p>You can follow our progress on these social networks.</p>
		            <ul class="social_icons">
		              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		            </ul>
		          </div>
		          <div class="col-md-6">
		            <div class="main-heading left_text">
		              <h2>Additional links</h2>
		            </div>
		            <ul class="footer-menu">
		              <li><a href="about_us"><i class="fa fa-angle-right"></i> About us</a></li>
		              <li><a href="privacy"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
		              <li><a href="privacy"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
		              <li><a href="it_News"><i class="fa fa-angle-right"></i> News</a></li>
		              <li><a href="contact"><i class="fa fa-angle-right"></i> Contact us</a></li>
		            </ul>
		          </div>
		          <div class="col-md-6">
		            <div class="main-heading left_text">
		              <h2>Services</h2>
		            </div>
		            <ul class="footer-menu">
		              <li><a href="data_recovery"><i class="fa fa-angle-right"></i> Data recovery</a></li>
		              <li><a href="data_recovery"><i class="fa fa-angle-right"></i> Computer repair</a></li>
		              <li><a href="data_recovery"><i class="fa fa-angle-right"></i> Mobile service</a></li>
		              <li><a href="data_recovery"><i class="fa fa-angle-right"></i> Network solutions</a></li>
		              <li><a href="data_recovery"><i class="fa fa-angle-right"></i> Technical support</a></li>
		            </ul>
		          </div>
		          <div class="col-md-6">
		            <div class="main-heading left_text">
		              <h2>Contact us</h2>
		            </div>
		            <p>Kutse 13, Jõhvi, 41533,<br>
		              Ida-Viruma maakond<br>
		              <span style="font-size:18px;"><a href="tel:+9876543210">+372 654 3210</a></span></p>
		            <div class="footer_mail-section">
		              <form>
		                <fieldset>
		                <div class="field">
		                  <input placeholder="Email" type="text">
		                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
		                </div>
		                </fieldset>
		              </form>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="cprt">
		        <p>ItNext © Copyrights 2019 Design by html.design</p>
		      </div>
		    </div>
		  </div>
	</footer>
	<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="public/js/menumaker.js"></script>
<!-- wow animation -->
<script src="public/js/wow.js"></script>
<!-- custom js -->
<script src="public/js/custom.js"></script>
<!-- revolution js files -->
<script src="public/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="public/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="public/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="public/js/map.js"></script>
      <!--ИЗМЕНЕННО СВЕРХУ-->
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
</body>
</html>