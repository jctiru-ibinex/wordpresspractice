<?php get_header(); ?>
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 col-sm-8">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('pb-5'); ?>>
							<?php the_post_thumbnail('full', ['class' => 'img-fluid img-thumbnail mx-auto d-block']) ?>
							<header class="entry-header text-center">
								<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
								<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link('Edit article'); ?></small>
							</header>
							<?php the_content(); ?>
							<hr>
							<div class="row pb-5">
								<div class="col-6 text-left"><?php previous_post_link(); ?></div>
								<div class="col-6 text-right"><?php next_post_link(); ?></div>
							</div>
							
							<?php if(comments_open()): ?>
								<?php comments_template(); ?>
							<?php else: ?>
								<h3>Sorry! Comments are closed!</h3>
							<?php endif; ?>
						</article>
					<?php endwhile ?>
				<?php endif; ?>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>