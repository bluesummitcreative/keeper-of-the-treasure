<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-116216216-1', {'allowAnchor': true});
			ga('send', 'pageview', { 'page': location.pathname + location.search + location.hash});
		</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
	<header class="header fixed-top">
		<div class="container-fluid top-bar bg-primary">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p><?php bloginfo('description'); ?></p>
						
					</div>
					<div class="col-sm-6 text-right">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="https://catspawcushions.com">Catspaw Cushions</a></li>
							<li class="list-inline-item"><a href="https://catspawcushions.com/catspaw-yoga-class-schedule/">Yoga</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	  	<nav class="navbar navbar-expand-md navbar-light">		 
		  <div class="container">
			  <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); if ( has_custom_logo() ) { echo '<img alt="'. get_bloginfo( 'name' ).' logo" src="'. esc_url( $logo[0] ) .'">'; } else { echo '<h2>'. get_bloginfo( 'name' ).'</h2>'; } ?></a>
			  	
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			  </button>

			  	<?php
					wp_nav_menu( array(
					  'container'       => 'div',
					  'container_class' => 'collapse navbar-collapse',
					  'container_id'    => 'navbarSupportedContent',
					  'menu' => 'header-menu',
					  'menu_class'      => 'navbar-nav ml-auto',
					  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => new bootstrap_4_walker_nav_menu()
				   ) );
				?>
		  </div>
		</nav>

	</header>
