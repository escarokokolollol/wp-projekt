	</div><!--  end of container --> 

</div>
</div>
	<footer>



 		<nav class="footer-nav">
			<?php
	
				$args=array('theme_location' => 'footer' );
	
			?>
	
			<?php wp_nav_menu( $args); ?>

  		</nav>


  		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>



	</footer>

	<?php wp_footer() ?>

</body>
</html>