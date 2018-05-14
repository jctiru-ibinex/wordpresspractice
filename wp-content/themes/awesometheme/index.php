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
							<div class="col-md-<?php echo $column; ?>">
								<?php if(has_post_thumbnail()): ?>
									<?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
								<?php endif; ?>
								<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
									<header>
										<h1 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h1>
										<?php the_category(' '); ?>
									</header>
								</div>
							</div>
							<?php //include(locate_template('content-blog.php', false, false)) ?>
							<?php //get_template_part('content' , get_post_format()); ?>
							<?php 
								$i++; 
								// if($i==6){
								// 	break;
								// }
							?>
						<?php endwhile ?>
						<div>
							<?php previous_posts_link('<< Newer Entries'); ?>
						</div>
						<div>
							<?php next_posts_link('Older Entries >>'); ?>
						</div>
						<!-- <div>
							<ul class="pagination">
						    	<li class="page-item disabled">
						    		<a class="page-link" href="<?php //echo get_next_posts_link(); ?>">&laquo;</a>
						    	</li>
						    	<li class="page-item active">
						      		<a class="page-link" href="#">1</a>
						    	</li>
						    	<li class="page-item">
						      		<a class="page-link" href="#">2</a>
						    	</li>
						    	<li class="page-item">
						      		<a class="page-link" href="<?php //echo get_previous_posts_link(); ?>">&raquo;</a>
						    	</li>
						  	</ul>
						</div> -->
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>

