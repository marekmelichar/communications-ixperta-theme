<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" sizes="16x16 32x32 64x64" type="image/x-icon" />

<!-- Font Awesome Icons -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

<?php wp_head();

?>

</head>

<body <?php body_class(); ?>>

<?php //get_template_part('partials/help_widget'); ?>

<?php get_template_part('partials/top_info_navbar'); ?>

<header class="header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col p-0">
				<a href="<?php echo esc_url( 'ixperta.com' ); ?>">
					<div class="logo">
						<div class="svg">
							<?php get_template_part('svg/logo_ixperta.svg'); ?>
						</div>
					</div>
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="sublogo">
						<div class="svg">
							<?php get_template_part('svg/logo_communications.svg'); ?>
						</div>
					</div>
				</a>
			</div>
			<div class="mobile-header col p-0">

				<?php
					wp_nav_menu(
						array(
							'theme_location'	=> 'primary',
							'container_class'	=> 'primary-menu',
							'menu_id'         => 'primary_menu',
							'menu_class'      => 'primary nav'
							)
					);
				?>

				<div class="mobile-search">
					<div class="search-icon">
						<i class="fas fa-search"></i>
					</div>
					<?php get_search_form(); ?>
				</div>

				<div class="hamburger">
					<!-- <div class="mobile-logo">
						<a href="/"><?php //get_template_part('svg/logo_ixperta_bile.svg'); ?></a>
					</div> -->
					<div class="mobile-menu-trigger">
						<i class="fas fa-bars"></i>
					</div>

					<div class="mobile-menu-close">
						<?php get_template_part('svg/krizek.svg'); ?>
					</div>

					<?php
						wp_nav_menu(
							array(
								'theme_location'	=> 'primary',
								'container_class'	=> 'primary-menu',
								'menu_id'         => 'mobile_menu',
								'menu_class'      => 'primary nav'
								)
						);
					?>
				</div>
			</div>
		</div>
	</div>
</header>
<a href="#top_info_navbar_repeater" id="back-to-top" title="Back to top"><span><?php get_template_part('svg/ikona_sipka_nahoru.svg'); ?></span></a>
