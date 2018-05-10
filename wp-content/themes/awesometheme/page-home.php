<?php get_header(); ?>
	<div class="container pt-5">
		<div id="awesome-carousel" class="carousel slide pb-5" data-ride="carousel">
	  		<?php $categories = get_categories(); ?>
		 	<ol class="carousel-indicators">
		 		<?php $count = 0; ?>
		 		<?php foreach($categories as $category): ?>
			    	<li data-target="#awesome-carousel" data-slide-to="<?php echo $count; ?>" class="<?php echo ($count==0)? 'active' : ''; ?>"></li>
			    	<?php $count++; ?>
			    <?php endforeach; ?>
		  	</ol>
		  	<div class="carousel-inner">
		  		<?php $count = 0; ?>
				<?php foreach($categories as $category): ?>
					<?php 
						$args = [
							'type' => 'post',
							'posts_per_page' => 1,
							'category_name' => $category->slug
						];
						$lastBlogPost = new WP_Query($args);
					 ?>
					<?php if($lastBlogPost->have_posts()): ?>
						<?php while($lastBlogPost->have_posts()): ?>
							<?php $lastBlogPost->the_post(); ?>
							<?php if(has_post_thumbnail()): ?>
								<?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
							<?php endif; ?>
							<div style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url(<?php echo $urlImg; ?>);" class="carousel-item text-center <?php echo ($count==0)? 'active' : ''; ?>">
								<div class="carousel-caption d-noned-md-block">
									<h1 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h1>
									<small><?php echo($category->name) ?></small>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php $count++; ?>
				<?php endforeach; ?>
			</div>
			<a class="carousel-control-prev" href="#awesome-carousel" role="button" data-slide="prev">
		   	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  		</a>
			<a class="carousel-control-next" href="#awesome-carousel" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
			</a>
		</div>
		<div class="row">
			<div class="col-12 col-sm-8">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>
						<?php get_template_part('content' , get_post_format()); ?>
					<?php endwhile ?>
				<?php endif; ?>

				<?php 
					// Print other two posts
					// $lastBlogPost = new WP_Query('type=post&posts_per_page=2&offset=1');
					// $args = [
					// 	'type' => 'post',
					// 	'posts_per_page' => 2,
					// 	'offset' => 1
					// ];
					// $lastBlogPost = new WP_Query($args);
					// if($lastBlogPost->have_posts()){
					// 	while($lastBlogPost->have_posts()){
					// 		$lastBlogPost->the_post();
					// 		get_template_part('content' , get_post_format());
					// 	}
					// }
					// wp_reset_postdata();
				?>
	
				<!-- <hr style="border-top: 5px solid;">
				<h2>Random Cat</h2> -->
				<?php 
				 	//Print other all posts with random category
					// $lastBlogPost = new WP_Query('type=post&posts_per_page=-1&cat=8');
				 // 	$args = [
				 // 		'type' => 'post',
				 // 		'posts_per_page' => -1,
				 // 		'category_name' => 'random'
				 // 	];
					// $lastBlogPost = new WP_Query($args);
					// if($lastBlogPost->have_posts()){
					// 	while($lastBlogPost->have_posts()){
					// 		$lastBlogPost->the_post();
					// 		get_template_part('content' , get_post_format());
					// 	}
					// }
					// wp_reset_postdata();
				?>
			</div>
			<div class="col-12 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>