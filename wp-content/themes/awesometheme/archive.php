<?php get_header(); ?>
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 col-sm-8">
				<div class="row">
					<?php if(have_posts()): ?>
						<?php the_archive_title( '<h1 class="entry-title pb-5 mx-auto">', '</h1>' ); ?>
						<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<?php get_template_part('content', 'search') ?>
						<?php endwhile ?>
					<?php endif; ?>
				</div>
				<div class="row">
					<?php echo get_paginated_numbers([]); ?>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>

