<?php if( get_field('site_wide_cta') ): ?>
<div class="container-fluid container-padding site-wide-cta text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php the_field('site_wide_cta'); ?>
			</div>
		</div>
	</div>
</div>

<?php else: ?>

<div class="container-fluid container-padding site-wide-cta text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>This journal is a journey</h3>
				<p>Let it help you on your path.</p>

				<a class="btn btn-primary" href="https://catspawcushions.com/product/journal-inside-the-belly-of-the-whale-is-your-journey/">Buy the Journal</a>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>
