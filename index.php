<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<section class="intro">
	<h1>Projektowanie Inkluzywne</h1>

	<p>Przygotuj swoją stronę tak, aby poprawnie wyświetlała się na wszystkich urządzeniach.</p>
	
	<h2>1. Wybierz wzorzec projektowy:</h2>
	
	<form action="./">
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
			?>
	
		</select>
	
		<button>Idź</button>
	</form>
</section> <!-- /intro -->

</div> <!-- /wrap -->

</div>
<!-- jQuery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!-- c(~) -->
</body>
</html>
