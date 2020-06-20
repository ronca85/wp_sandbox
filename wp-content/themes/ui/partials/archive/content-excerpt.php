<?php
/**
* Template part for displaying post archives and search results
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article>
