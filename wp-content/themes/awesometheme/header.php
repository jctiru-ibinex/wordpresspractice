<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hello Dolllllllllllllllllllllllllllllllllllly</title>
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
			<?php wp_nav_menu([
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'navbar-nav',
								'menu_id' => ' ',
								'walker' => new Walker_Nav_Primary()
								]); ?>	
			</div>	
			<?php get_search_form(); ?>	
		</div>
	</nav>
	