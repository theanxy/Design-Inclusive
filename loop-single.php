<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<h2 class="label">2. Sprawdź przykład rozwiązania</h2>
<div id="iframe">
	<iframe src="<?php echo get_template_directory_uri(); ?>/preview.php?p=<?php echo $post->ID ?>"></iframe>
</div><!-- /iframe -->

<div class="main" role="main">

<style id="s" type="text/css">
<?php $key="css"; echo get_post_meta($post->ID, $key, true); ?>
</style>
		
		<div id="markup" class="mod">
			<h3 class="label">3. Skopiuj HTML</h3>
			<textarea class="mod-ta">
<?php $key="html"; echo get_post_meta($post->ID, $key, true); ?>			
			</textarea>
		</div>
		
		<div id="style" class="mod">
			<h3 class="label">4. Skopiuj CSS</h3>
			<textarea id="css-code" class="mod-ta">
<?php $key="css"; echo get_post_meta($post->ID, $key, true); ?>
			</textarea>
		</div>
		
		<?php if($post->post_content != "") {?>
		<div id="pattern-notes" class="mod">
			<h3 class="label">5. Notatki</h3>
			<?php the_content(); ?>
		</div>
		<?php } ?>
		

<?php endwhile; // end of the loop. ?>