<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<?php wp_head(); ?>
</head>
<?php 
	if(is_front_page()){
		$awesome_classes = array('awesome-class', 'my-class');
	} else {
		$awesome_classes = array('no-awesome-class');
	}
 ?>
<body <?php body_class($awesome_classes); ?>>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
		<div class="container">
			<a class="navbar-brand" href="#">GGWP</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<?php //wp_nav_menu([
								//'theme_location' => 'primary',
								//'container' => false,
								//'menu_class' => 'navbar-nav',
								//'menu_id' => ' ',
								//'walker' => new Walker_Nav_Primary()
								//]); ?>
			<?php wp_nav_menu([
								'theme_location' => 'primary',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'navbar-nav',
								'menu_id' => ' ',
								'walker' => new WP_Bootstrap_Navwalker(),
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback'
								]); ?>		
			</div>	
			<?php get_search_form(); ?>	
		</div>
	</nav>
	