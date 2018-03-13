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
		<?php if( get_field('additional_copy') ): ?>
		<div class="row">
			<div class="col-sm-12">
				<?php if( get_field('additional_copy') ): ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>
