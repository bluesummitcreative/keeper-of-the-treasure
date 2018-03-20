<?php if ( is_page_template('full-width.php') ) { ?>
<div class="col-sm-12">
<?php } else { ?>
<div class="col-sm-9 order-last">
<?php } ?>
<?php if(has_post_thumbnail()) { ?>
	<div class="row">
		<div class="col-sm-12">
			<?php the_post_thumbnail('medium_large', ['class' => 'img-fluid']);?>
		</div>
	</div>
<?php } else { ?>
<?php if( have_rows('intro_images') ): ?>
	<div class="row">
	<?php while ( have_rows('intro_images') ) : the_row(); ?>
		<div class="col-sm-4">
			<div class="intro-image">
			<img src="<?php the_sub_field('image'); ?>" alt="" class="image-fluid" />
			</div>
		</div>
	<?php endwhile; ?>
	</div>
<?php endif; ?>
<?php } ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
