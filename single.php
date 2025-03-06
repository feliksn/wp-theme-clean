<?php get_header(); ?>

<?php while( have_posts() ) { ?>
	<?php the_post(); ?>
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<div><?php the_content(); ?></div>			
	</div>
<?php } ?>

<?php get_footer(); ?>
