<?php 
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/featured_section.php'); ?>

<?php if(have_posts()) : ?>

	<?php while(have_posts()) : the_post(); ?>

	<div id='front_content'>
		<div id='sound-tags'>
			<div class='sound-1'><a href='#'>.</a></div>
			<div class='sound-2'><a href='#'>.</a></div>
			<div class='sound-3'><a href='#'>.</a></div>
			<div class='sound-4'><a href='#'>.</a></div>
			<div class='sound-5'><a href='#'>.</a></div>
		</div>

		<h3 id='tagline'>
			<?php echo get_post_meta($post->ID, 'tagline', true ); ?>
			
			</h3>

			<div id='home-content'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>

		<?php 
		$recentBlog = new WP_Query();
		$recentBlog->query('showposts=1');
		while($recentBlog->have_posts()) : $recentBlog->the_post();
		?>

	<?php endwhile; ?>

	<div class='front_col'>
		<h2>from the blog</h2>

		<p><?php the_content_rss('Read More &hellip;', false, ' ', 35); ?></p>

		<span><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More &hellip;</a></span>

	</div>

	<?php else: ?>

		<h2>Whoops! We could not find what you were looking for </h2>
	<?php endif; ?>


	<?php get_footer(); ?>