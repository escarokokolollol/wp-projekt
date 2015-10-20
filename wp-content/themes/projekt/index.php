<?php get_header() ?>




	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
		<article>


			<a href=""><img src="<?php ?>"><h1><?php ?></h1></a>



			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_content(); ?></p>
		</article>
	<?php endwhile; endif; ?>





<?php get_footer() ?>