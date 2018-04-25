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

	<script type="text/javascript" src="//fast.fonts.net/jsapi/6283a7b2-3148-48a3-b6f2-238d9f705f64.js"></script>


	<?php
	$site_logo = get_field('site_logo', 'options');
	$logo_url = $site_logo['sizes']['medium'];
	$favicon_url = $site_logo['sizes']['small'];
	?>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $favicon_url ?>">

	<!-- Analytics -->
	<?php the_field('google_analytics_code', 'option'); ?>

	<!-- SEO -->
	<?php the_field('google_sitemap_verification', 'option'); ?>
	<?php the_field('bing_sitemap_verification', 'option'); ?>

	<?php wp_head(); ?>

<!-- ////////////////////////// -->

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<?php
	if (!is_404()) {
		$background_images = get_field('background_images');
		$rand_bg = array_rand($background_images);
		$bg_url = $background_images[$rand_bg]["image_choice"]["sizes"]['background-fullscreen'];
	} else {
		$bg_url = get_template_directory_uri() . '/img/404bg.jpg';
	};
	?>
	<div class="background-fullscreen" style="background-image:url('<?php echo $bg_url ?>')"></div>
	<body class="home">
<!-- <//?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?><//?php } ?> -->
	<div class="container">
		<div class="row">
      <div class="columns-3">
			<header>
				<div class="logo fixed">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="site logo" src="<?php echo $logo_url ?>" /></a>
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
			    <!-- <div class="social">
			      <a href="https://www.facebook.com/elkcityrecords/" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
			      <a href="https://www.instagram.com/ecrecords/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
					<a href="https://www.yelp.com/biz/elk-city-records-charleston" target="_blank"><i class="fa fa-lg fa-yelp"></i></a>
			    </div> -->
			  </div>
				  <!-- <div class="cards fixed">
				    <p><a class="info-item" href="mailto:contact@elkcityrecords.com">contact@elkcityrecords.com</a><span class="mesh info-item">Website by <a href="http://meshfresh.com" target="_blank">MESH</a></span></p>
				  </div> -->

				</div>
			</header>
		</div>
