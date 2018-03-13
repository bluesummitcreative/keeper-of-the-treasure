<?php if( get_field('intro_right_content') ): ?>
<div class="container-fluid container-padding intro">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<?php the_field('intro_left_content'); ?>
			</div>
			<div class="col-sm-5">
				<?php the_field('intro_right_content'); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
