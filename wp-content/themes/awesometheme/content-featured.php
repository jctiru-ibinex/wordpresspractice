<article id="post-<?php the_ID(); ?>" <?php post_class('pb-5'); ?>>
	<?php if(has_post_thumbnail()): ?>
		<div class="thumbnail">
			<?php the_post_thumbnail('full', ['class' => 'img-fluid img-thumbnail']); ?>		
		</div>
	<?php endif; ?>
	<h1 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h1>
</article>