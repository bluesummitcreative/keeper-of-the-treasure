<div class="col-sm-9 order-last">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row post">
		<?php if(has_post_thumbnail()) { ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'img-responsive'));?></a>
			</div>
			<div class="col-sm-9">
			<?php } else { ?>
			<div class="col-sm-12">
			<?php } ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="blog-post-meta"><span class="author">By <?php the_author(); ?></span> <span class="date">on <?php the_time( get_option( 'date_format' ) ); ?></span> | Categories: <span class="categories"><?php the_category( ', ' ); ?></span></p>
				<?php the_content(); ?>
			</div>
	</div>
	
	<?php wp_link_pages(); ?>
    <?php endwhile; endif; ?>
		<div class="row text-center"><?php wpex_pagination(); ?></div>
</div>
