<?php apply_filters("debug", "Header start"); ?><!DOCTYPE html>
<html>
	<head>

		<title><?php is_home() ? bloginfo('name') : wp_title(''); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">

		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less">
		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/sapphire.less">

		<script src="<?php echo get_template_directory_uri(); ?>/js/less-1.3.1.min.js" type="text/javascript"></script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="container">

			<header>

				<?php $custom_header = get_custom_header(); ?>
				<div class="site-header"<?php if($custom_header->url != ''): ?> style="background: url('<?php echo $custom_header->url; ?>'); height: <?php echo $custom_header->height; ?>px;"<?php endif; ?>>
					<h2 class="site-header-title"><a href="<?php echo site_url('/'); ?>"><?php bloginfo('name'); ?></a></h2>
					<p class="site-header-desc"><?php bloginfo('description'); ?></p>
				</div>


				<?php get_search_form(); ?>


				<?php
				/* Main menu, cached with transient
				-------------------------------------------------- */
				/*
				global $theme_namespace;
				if ( false === ( $menu = get_transient( $theme_namespace . '_top_menu' ) ) )
				{
					$args = array(
						'theme_location' => 'top-menu',
						'container' => false,
						'menu_class' => 'top-navigation-menu',
						'fallback_cb' => 'sapphire_no_menu',
						'echo' => 0
					);
					$menu = wp_nav_menu($args);
					set_transient( $theme_namespace . '_top_menu', $menu, WEEK_IN_SECONDS );
				}
				echo $menu;
				*/
				?>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle">Menu</h3>
					<a class="hidden" href="#content" title="Skip to content">Skip to content</a>
					<?php
					/* Main menu, cached with transient
					-------------------------------------------------- */
					global $theme_namespace;
					if ( false === ( $menu = get_transient( $theme_namespace . '_top_menu' ) ) )
					{
						$args = array(
							'theme_location' => 'top-menu',
							'menu_class' => 'nav-menu',
							'echo' => 0
						);
						$menu = wp_nav_menu($args);
						set_transient( $theme_namespace . '_top_menu', $menu, MINUTE_IN_SECONDS );
					}
					echo $menu;
					?>
				</nav><!-- ./main-navigation -->

			</header>

			<div class="row">
				<div class="span1 grid-preview">1</div>
				<div class="span1 grid-preview">2</div>
				<div class="span1 grid-preview">3</div>
				<div class="span1 grid-preview">4</div>
				<div class="span1 grid-preview">5</div>
				<div class="span1 grid-preview">6</div>
				<div class="span1 grid-preview">7</div>
				<div class="span1 grid-preview">8</div>
				<div class="span1 grid-preview">9</div>
				<div class="span1 grid-preview">10</div>
				<div class="span1 grid-preview">11</div>
				<div class="span1 grid-preview">12</div>
			</div>

			

			<?php apply_filters("debug", "Header end"); ?>
