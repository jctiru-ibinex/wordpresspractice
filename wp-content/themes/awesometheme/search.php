<?php get_header(); ?>
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 col-sm-8">
				<div class="row">
					<?php if(have_posts()): ?>
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<?php get_template_part('content', 'search') ?>
						<?php endwhile ?>
					<?php endif; ?>
				</div>
				<div class="row">
					<?php //the_posts_pagination(); ?>
					<?php echo get_paginated_numbers(); ?>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>

