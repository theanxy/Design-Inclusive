<!DOCTYPE html>
<html lang="en">
<head>
<title>Design Inclusive <?php wp_title('/', true, 'left'); ?></title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

<!-- hide css from IE6 but load for everyone else -->
<!--[if gte IE 7]><!-->
<link rel="stylesheet/less" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/screen.less" />
<!-- <![endif]-->

<link rel="shortcut icon" href="/favicon.png" /> 

<!-- enable HTML5 elements in IE7+8 -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/less.js"></script>
</head>

<body <?php body_class(); ?>>

<header role="banner" class="group">
	<a href="<?php bloginfo('siteurl'); ?>/" id="logo">
		Design inclusive
	</a>
	
	<div id="pages">
		<select>
		
			<?php
			/*****************************************************************
			*
			* alchymyth 2011
			* a hierarchical list of all categories, with linked post titles
			*
			******************************************************************/
			// http://codex.wordpress.org/Function_Reference/get_categories

			foreach( get_categories('hide_empty=1','order_by=name') as $cat ) :
				if( !$cat->parent ) {
					echo '<optgroup label="' . $cat->name . '">';
					process_cat_tree( $cat->term_id );
					echo '</optgroup>';
				}
			endforeach;

			wp_reset_query(); //to reset all trouble done to the original query
			//
			function process_cat_tree( $cat ) {

				$args = array('category__in' => array( $cat ), 'numberposts' => -1, 'orderby' => title, 'order' => ASC);
				$cat_posts = get_posts( $args );

				if( $cat_posts ) :
					foreach( $cat_posts as $post ) :
						echo '<option value="' . get_permalink( $post->ID ) . '">';
						echo $post->post_title;
						echo '</option>';
					endforeach;
				endif;

				$next = get_categories('hide_empty=0&parent=' . $cat);

				if( $next ) :
					foreach( $next as $cat ) :
						echo '<ul><li><strong>' . $cat->name . '</strong></li>';
						process_cat_tree( $cat->term_id );
					endforeach;
				endif;
			}
			?>
		
		</select>
	</div>
	
	<div id="width-control">
		<div id="slider"></div>
		<span></span>
	</div>

</header>

<div class="wrap group">