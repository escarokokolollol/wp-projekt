	</div><!--  end of container --> 

	<footer>



 		<nav class="footer-nav">
			<?php
	
				$args=array('theme_location' => 'footer' );
	
			?>
	
			<?php wp_nav_menu( $args); ?>

  		</nav>






	</footer>

	<?php wp_footer() ?>

</body>
</html>