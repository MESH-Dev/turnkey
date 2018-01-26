<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>

<!-- ////////////////////////// -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- <script type="text/javascript" src="<//?php bloginfo('template_directory'); ?>/js/instafeed.min.js"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<!-- <script src="js/yarids.js"></script> -->

<!-- <script type="text/javascript">-->


</head>
<?php
	$site_logo = get_field('site_logo', 'options');
	// var_dump($site_logo);
	$logo_url = $site_logo['sizes']['medium'];
	$background_images = get_field('background_images');
	$rand_bg = array_rand($background_images);
	$bg_url = $background_images[$rand_bg]["image_choice"]["sizes"]['background-fullscreen'];
	?>
	<body class="home background-fullscreen" style="background-image:url('<?php echo $bg_url ?>')">
<!-- <//?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?><//?php } ?> -->
	<div class="container">
		<div class="row">
      <div class="columns-3">
			<header>
				<div class="logo fixed">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo_url ?>" /></a>
				</div>
				<div class="desktop-menu">
			  <div class="sidebar fixed">
			    <div class="navigation">
			      <!-- <ul>
			        <li><a href="story.php" <//?php if($_SERVER['PHP_SELF'] == '/story.php'){echo 'class="active"';}?>>Our Story</a></li>
			        <li><a href="philosophy.php" <//?php if($_SERVER['PHP_SELF'] == '/philosophy.php'){echo 'class="active"';}?>>Our Philosophy</a></li>
			        <li><a href="designers.php" <//?php if($_SERVER['PHP_SELF'] == '/designers.php'){echo 'class="active"';}?>>Designers</a></li>
			        <li><a href="wishlist.php" <//?php if($_SERVER['PHP_SELF'] == '/wishlist.php'){echo 'class="active"';}?>>Our Instagram</a></li>
			        <li><a href="stores.php" <//?php if($_SERVER['PHP_SELF'] == '/stores.php'){echo 'class="active"';}?>>Our Stores</a></li>
			      </ul> -->
					<a id="mobileLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo_url ?>" /></a>
					<a id="menuTrigger">Menu</a>
			      <?php if(has_nav_menu('main_nav')){
			         $defaults = array(
			            'theme_location'  => 'main_nav',
			            'menu'            => 'main_nav',
			            'container'       => false,
			            'container_class' => '',
			            'container_id'    => '',
			            'menu_class'      => 'menu',
			            'menu_id'         => '',
			            'echo'            => true,
			            'fallback_cb'     => 'wp_page_menu',
			            'before'          => '',
			            'after'           => '',
			            'link_before'     => '',
			            'link_after'      => '',
			            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			            'depth'           => 0,
			            'walker'          => ''
			         ); wp_nav_menu( $defaults );
			      }else{
			         echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
			      } ?>
			    </div>
			    <div class="social">
			      <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
			      <a href="https://instagram.com/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
					<a href="https://www.yelp.com/biz/elk-city-records-charleston" target="_blank"><i class="fa fa-lg fa-yelp"></i></a>
			    </div>
			  </div>


			  <!-- <div class="twitter fixed">
			      <//?php echo $TweetPHP->get_tweet_list(); ?>
			      <div class="social">
			        <a href="" target="_blank"><i class="fa fa-lg fa-twitter-square twitter-icon"></i></a>
			      </div>
			  </div> -->

				  <div class="cards fixed">
				    <p><a class="info-item" href="mailto:info@example.com">info@example.com</a><span class="mesh info-item">Website by <a href="http://meshfresh.com" target="_blank">MESH</a></span></p>
				    <!-- <p>
				      <img src="images/icons/visa-straight-32px.png">
				      <img src="images/icons/mastercard-straight-32px.png">
				      <img src="images/icons/discover-straight-32px.png">
				      <img src="images/icons/american-express-straight-32px.png">
				    </p> -->
				  </div>

				</div>
			</header>
		</div>
