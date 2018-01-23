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

<!-- <script type="text/javascript" src="js/instafeed.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- <script src="js/yarids.js"></script> -->

<!-- <script type="text/javascript">

$( document ).ready(function() {

	var html = $('html');

	function showBackgrounds() {

		if ((window.location.href.indexOf('.php') == -1) || (window.location.href.indexOf('index.php') > -1)) {

			$.fn.preload = function() { this.each(function(){ $('<img/>')[0].src = this; }); }

			//Homepage preload and image array

			$([
			"images/LR_FW16.jpg",
			"images/LR_FW16_fullbody.jpg",
			"images/ChanLuu_FW16.jpg",
			"images/Yarids_SamEdelmanFW16.jpg",
			"images/FW2016-RL.jpg",
			"images/Yarids_FW2016_Beautifeel.jpg",
			//"images/Yarids_Sp16_Green_03.jpg",
			//"images/Yarids_Sp16_Purple_01.jpg",
			//"images/Yarids_Sp16_Purple_02.jpg",
			//"images/Yarids_Sp16_Purple_03.jpg",
			//"images/Yarids_Sp16_Purple_04.jpg",
			//"images/Yarids_Sp16_Purple_05.jpg",
			//"images/Yarids_Sp16_Red_01.jpg",
			//"images/Yarids_Sp16_Red_02.jpg",
			//"images/Yarids_Sp16_Red_03.jpg",
			//"images/Yarids_Sp16_Red_04.jpg"
			]).preload();

			var bgs = [
			"images/LR_FW16.jpg",
			"images/LR_FW16_fullbody.jpg",
			"images/ChanLuu_FW16.jpg",
			"images/Yarids_SamEdelmanFW16.jpg",
			"images/FW2016-RL.jpg",
			"images/Yarids_FW2016_Beautifeel.jpg",
			//"images/Yarids_Sp16_Green_03.jpg",
			//"images/Yarids_Sp16_Purple_01.jpg",
			//"images/Yarids_Sp16_Purple_02.jpg",
			//"images/Yarids_Sp16_Purple_03.jpg",
			//"images/Yarids_Sp16_Purple_04.jpg",
			//"images/Yarids_Sp16_Purple_05.jpg",
			//"images/Yarids_Sp16_Red_01.jpg",
			//"images/Yarids_Sp16_Red_02.jpg",
			//"images/Yarids_Sp16_Red_03.jpg",
			//"images/Yarids_Sp16_Red_04.jpg",
			];


			function changeBackground(curNumber) {

				html.css({
					//This is an "array" of css properties, add more if necessary
					"background-image": "url(" + bgs[curNumber] + ") ",
					"background-repeat": "no-repeat",
					"background-position": "center center",
					"background-size" : "cover"
				});

				curNumber++;

				if(curNumber == bgs.length) {
					curNumber = 0;
				}

				if (curNumber % 3 == 0) {
					setTimeout(function(){changeBackground(curNumber)}, 2000);
				} else {
					setTimeout(function(){changeBackground(curNumber)}, 750);
				}

			}

			changeBackground(0);
		}

	}

	//Commented out while animation is not needed.  Uncomment to bring back.
	//setTimeout(showBackgrounds, 3000);

});



</script> -->

</head>
<?php
	$site_logo = get_field('site_logo', 'options');
	// var_dump($site_logo);
	$logo_url = $site_logo['sizes']['medium'];
?>
<body class="home background-fullscreen" style="background-image:url('<?php bloginfo('template_directory') ?>/img/ex1.jpg')">
<!-- <//?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { ?><//?php } ?> -->
	<div class="container">
		<div class="row">
      <div class="columns-3">
			<header>
				<div class="logo fixed">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo_url ?>" /></a>
				</div>
				<div class="responsive-menu">
					<i class="fa fa-bars menu-trigger"></i><!-- fa-2x -->
					<div class="navigation">
						  <!-- <ul>
							 <li><a href="story.php" <//?php if($_SERVER['PHP_SELF'] == '/story.php'){echo 'class="active"';}?>>Our Story</a></li>
							 <li><a href="philosophy.php" <//?php if($_SERVER['PHP_SELF'] == '/philosophy.php'){echo 'class="active"';}?>>Our Philosophy</a></li>
							 <li><a href="designers.php" <//?php if($_SERVER['PHP_SELF'] == '/designers.php'){echo 'class="active"';}?>>Designers</a></li>
							 <li><a href="wishlist.php" <//?php if($_SERVER['PHP_SELF'] == '/wishlist.php'){echo 'class="active"';}?>>Our Instagram</a></li>
							 <li><a href="stores.php" <//?php if($_SERVER['PHP_SELF'] == '/stores.php'){echo 'class="active"';}?>>Our Stores</a></li>
						  </ul> -->
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
						<div class="social">
							<a href="https://www.facebook.com/pages/Yarids-Charleston/64910405871" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
							<a href="https://instagram.com/yaridsshoes/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
						</div>
					</div>
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
			      <a href="https://www.facebook.com/pages/Yarids-Charleston/64910405871" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
			      <a href="https://instagram.com/yaridsshoes/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a>
			    </div>
			  </div>


			  <!-- <div class="twitter fixed">
			      <//?php echo $TweetPHP->get_tweet_list(); ?>
			      <div class="social">
			        <a href="" target="_blank"><i class="fa fa-lg fa-twitter-square twitter-icon"></i></a>
			      </div>
			  </div> -->

				  <div class="cards fixed">
				    <p><a href="mailto:info@yarids.com">info.yarids@gmail.com</a> &nbsp; &nbsp; <span class="mesh">Website by <a href="http://meshfresh.com" target="_blank">MESH</a></span></p>
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
