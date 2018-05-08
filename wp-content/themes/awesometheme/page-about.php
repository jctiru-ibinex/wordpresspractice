<?php 
/*
	Template Name: About Page
*/
 ?>
<?php get_header(); ?>
	<div class="container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
				<p><?php the_content(); ?></p>
				<hr>
			<?php endwhile ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>