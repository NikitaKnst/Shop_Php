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
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"> Kutse 13, Jõhvi, 41533 Ida-Viru maakond</span> </li>
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
                <li> <a href="it_blog.html">News</a>
                  <ul>
                    <li><a href="it_blog.html">News List</a></li>
                    <li><a href="it_blog_detail.html">News Detail</a></li>
                  </ul>
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
                <li> <a href="login">Login</a>
                </li>
              </ul>
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
		?>
</main>
<!-- section -->
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">

          <?php
          foreach ($row as $product) {
            
            echo '<div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">';
            echo '<div class="product_list">';
              echo '<div class="product_img">'; 
                echo '<img class="img-responsive" style="height: 275px;" src="public/images/WepPC/'.$product['images'].'" alt="">'; 
                    echo '</div>';
              echo '<div class="product_detail_btm">';
                echo '<div class="center">';
                  echo '<h4><a href="productDetail">'.$product['Name_Product'].'</a></h4>';
                echo '</div>';
                echo '<div class="starratin">';
                  echo '<div class="center">'; 
                  echo '<i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i>'; 
                  echo '</div>';
                echo '</div>';
                echo '<div class="product_price">';
                  echo '<p>$ '.$product['Price'].'</p>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
           echo '</div>';

          }

          ?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>SEARCH</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>GET A QUOTE</h4>
            <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
            <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>

          <div class="side_bar_blog">
            <h4>Our Goods</h4>
            <div class="categary">
              <ul>
                <?php
                  foreach ($rows as $category) {
                    echo '<li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i>'.$category['Category'].' </a></li>';
                  }
                ?>
              </ul>
            </div>
          </div>

          <div class="side_bar_blog">
            <h4>RECENT NEWS</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">What Clients Say?</h2>
            <p class="large">Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service.Good Job! </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">Narva, Singe</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> You really do your job very quickly, I brought my laptop and they made it to me the same day. I am very pleased.The work is done very high quality and not expensive. Top for your money </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Erika Popova</h4>
                    <span class="testimonial-position">Kohtla-Jarve, Alpha</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> This is the best company! She gave me back all the lost data from the hard drive in just one hour and at a very low cost. I will definitely come back again. Next time I'll bring my laptop here to fix  </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Elena Viktorovna</h4>
                    <span class="testimonial-position">Johvi, Tech NY</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
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
		              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> About us</a></li>
		              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
		              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
		              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> News</a></li>
		              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
		            </ul>
		          </div>
		          <div class="col-md-6">
		            <div class="main-heading left_text">
		              <h2>Services</h2>
		            </div>
		            <ul class="footer-menu">
		              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
		              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
		              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
		              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
		              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
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