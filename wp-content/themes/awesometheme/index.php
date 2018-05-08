<?php get_header(); ?>
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 col-sm-8">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>
						<?php get_template_part('content' , get_post_format()); ?>
					<?php endwhile ?>
				<?php endif; ?>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>