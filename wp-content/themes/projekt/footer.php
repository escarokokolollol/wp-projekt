	</div><!--  end of container --> 

	<footer>



		<nav class="site-nav">
			<?php
	
				$args=array('theme_location' => 'footer' );
	
			?>
	
			<?php wp_nav_menu( $args); ?>

  		</nav>






<!-- 		<ul>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>				
			</li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>

		</ul> -->

	</footer>

	<?php wp_footer() ?>

</body>
</html>