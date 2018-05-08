<?php get_header(); ?>
	<div class="container pt-5">
		<div class="row">
			<?php $categories = get_categories(); ?>
			<?php //print_r($categories) ?>
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
						<div class="col-12 col-sm-4">
							<h1><?php echo($category->name) ?>:</h1>
							<?php get_template_part('content', 'featured'); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			<?php endforeach; ?>		
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