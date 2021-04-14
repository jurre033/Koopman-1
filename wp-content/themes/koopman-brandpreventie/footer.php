
		</div>

		<footer id="colophon" class="site-footer">
				<div class="container">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1 ) ); ?>
					</nav>
				</div>
            <div class="socket">
                <?php wp_nav_menu( array( 'theme_location' => 'socket-menu', 'depth' => 1 ) ); ?>
            </div>
		</footer>
	</div

	<?php wp_footer(); ?>

	</body>
</html>

  
