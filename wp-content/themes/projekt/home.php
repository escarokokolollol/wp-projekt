<?php get_header(); ?>

<!-- headerimage -->
<?php $header = new WP_Query(array(
	'post_type' => 'header'
)); ?>

<?php while($header -> have_posts()) : $header -> the_post(); ?>

	<div id="banner">
		<h1> <?php bloginfo('name'); ?> </h1>
		<h2> <?php bloginfo('description'); ?> </h2>

		<?php the_post_thumbnail(); ?>
	</div>

<?php endwhile; ?>





<!-- kampanjer -->

<?php $kampanj = new WP_Query(array(
	'post_type' => 'asd'
)); ?>
<?php while($kampanj->have_posts()) : $kampanj -> the_post(); ?>

<div class="kampanj">


<div class="bilden">
	<?php the_post_thumbnail(); ?>
	<div class="title-container">
		<h1> <?php the_title(); ?> </h1>
	</div>
</div>
		

<p> <?php the_content(); ?> </p>

</div>

<?php endwhile; ?>


<?php get_footer(); ?>