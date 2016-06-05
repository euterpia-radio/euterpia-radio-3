<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div class="top-bar">
	<div class="inner-wrapper">
		<div class="socials">
			<div class="socialmedia twitter"><a href="https://twitter.com/euterpiaradio">Twitter</a></div>
			<div class="socialmedia facebook"><a href="https://www.facebook.com/euterpiaradio">Facebook</a></div>
			<div class="socialmedia feed"><a href="<?php get_site_url() ; ?>/category/euterpia-radio/feed/">Podcast Feed</a></div>
		</div>
	</div>
</div>
<div class="top-title">
	<div class="inner-wrapper">
		<div class="title">
			Euterpia Radio
			<div class="swissflag"></div>
		</div>
	</div>
</div>
<div class="top-menu">
	<div class="inner-wrapper">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</div>
</div>
<div class="main-pannel">
	<div class="inner-wrapper">
