	<footer class="footer">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-3' ); ?>
					</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
					<div class="col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-4' ); ?>
					</div>
					<?php endif; ?>
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
