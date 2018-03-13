	<footer class="footer">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<?php
						if ( is_active_sidebar( 'footer-widget-1' ) ) : 
							dynamic_sidebar( 'footer-widget-1' ); 
						endif;
					?>
					
					<?php
						if ( is_active_sidebar( 'footer-widget-2' ) ) : 
							dynamic_sidebar( 'footer-widget-2' ); 
						endif;
					?>
					
					<?php
						if ( is_active_sidebar( 'footer-widget-3' ) ) : 
							dynamic_sidebar( 'footer-widget-3' ); 
						endif;
					?>
					
					<?php
						if ( is_active_sidebar( 'footer-widget-4' ) ) : 
							dynamic_sidebar( 'footer-widget-4' ); 
						endif;
					?>
				</div>
			</div>
		</div>
	</footer>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="copyright">Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a<?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?> target="_blank" href="https://www.bluesummitcreative.com/">Website Design by Blue Summit Creative</a></p>
					</div>
				</div>
			</div>
		</div>
	<?php wp_footer(); ?>
	</body>
</html>
