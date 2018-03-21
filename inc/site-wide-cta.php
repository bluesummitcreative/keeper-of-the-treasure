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
				<h3>Find the Pause</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur justo nulla, facilisis non molestie ut.</p>

				<a class="btn btn-primary" href="https://catspawcushions.com/shop/">Buy the Journal</a>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>
