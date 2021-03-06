<?php
/**
 * The header for our theme.
 *
 *
 *
 * @package WPBootScore
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wpbootscore3' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation navbar navbar-default" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo home_url(); ?>">
		                <?php bloginfo('name'); ?>
		            </a>
		    </div>

		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        'container_id'      => 'primary-navbar-collapse',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav><!-- #site-navigation -->

		<?php get_template_part('template-parts/tp-slide'); ?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
			<?php echo bootscore_breadcrumbs(); ?>
		</div>





	<?php $otshow = ot_get_option('custom-id'); 
		if ( $otshow ==  "off") {
	?>

	<style>
		#services {
			display: none;
		}
	</style>

	<?php } ?>