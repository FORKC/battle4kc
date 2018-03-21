<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caldera
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Battle4KC on May 6th, 2017, Berkley Riverfront Park, Kansas City, MO</title>
<meta property="og:image" content="http://battle4kc.com/wp-content/uploads/2017/02/logo_battle4kc_siteicon.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93553323-1', 'auto');
  ga('send', 'pageview');

</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php caldera_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'caldera' ); ?></a>
	<header id="masthead" <?php caldera_header_class(); ?> role="banner">
		<?php caldera_ads_header() ?>
		<?php get_template_part( 'template-parts/header/top-panel' ); ?>
		<div class="header-wrapper">
			<div class="header-container">
				<div <?php echo caldera_get_container_classes( array( 'header-container_wrap container' ), 'header' ); ?>>
					<?php get_template_part( 'template-parts/header/layout', get_theme_mod( 'header_layout_type' ) ); ?>
				</div>
			</div>
			<!-- .header-container -->
			<?php get_template_part( 'template-parts/header/showcase-panel' ); ?>
		</div>
	</header>
	<!-- #masthead -->

	<div id="content" <?php caldera_content_class(); ?>>
