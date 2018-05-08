<article id="post-<?php the_ID(); ?>" <?php post_class('pb-5'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h1>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	</header>
	<div class="row">
		<?php if(has_post_thumbnail()): ?>
			<div class="col-12 col-sm-4">
				<?php the_post_thumbnail('full', ['class' => 'img-fluid img-thumbnail']); ?>
			</div>
			<div class="col-12 col-sm-8">
				<?php the_content(); ?>
			</div>
		<?php else: ?>
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
	</div>
</article>