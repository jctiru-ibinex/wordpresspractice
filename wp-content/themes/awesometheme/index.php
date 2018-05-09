<?php get_header(); ?>
	<div class="container pt-5">
		<div class="row">
			<div class="col-12 col-sm-8">
				<div class="row text-center no-gutters ">
					<?php if(have_posts()): ?>
						<?php $i = 0; ?>
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<?php 
								if($i==0){
									$column=12;
								}elseif($i>=1 && $i<=2){
									$column=6;
								}elseif($i>=3 && $i<=5){
									$column=4;
								}
							?>
							<div class="col-<?php echo $column; ?>">
								<?php if(has_post_thumbnail()): ?>
									<?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
								<?php endif; ?>
								<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
									<h1 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h1>
								</div>
							</div>
							<?php //include(locate_template('content-blog.php', false, false)) ?>
							<?php //get_template_part('content' , get_post_format()); ?>
							<?php $i++; ?>
						<?php endwhile ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>

