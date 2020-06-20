<?php
/**
* The template for displaying search results pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*/
?>

	<?php get_header(); ?>

	<main data-barba="wrapper">

		<div data-barba="container" data-barba-namespace="about">
			<div class="o-scroll" id="js-scroll" data-scroll-container>
				
				<?php get_template_part( 'partials/breadcrumbs'); ?>

				<section data-scroll-section>
					<div class="o-container">
						<div class="o-layout -gutter-small">
							<div class="o-layout_item u-1/3@from-medium">

								<h3 class="page-title">
									<?php
									/* translators: Search query. */
									/*
									* USE FOR REFERENCE: https://en.wikipedia.org/wiki/Quotation_mark#Summary_table
									*/
									printf( __( 'Search Results for: <span class="o-quotemark">„</span> %s <span class="o-quotemark">”</span>', 'UI' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h3>
								<?php if ( have_posts() ) : ?>
									<p style="background: pink;">display number of result here</p>
									<p style="background: coral;"><?php _e( 'Following posts matched your search query', 'UI' ); ?></p>
								<?php else : ?>
									<p style="background: coral;"><?php _e( 'Nothing Found', 'UI' ); ?></p>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</section>

				<?php
					if ( have_posts() ) :
				?>

				<section data-scroll-section>
					<p>if ( have_posts() )</p>
					<div class="o-container">

						<h2>refine your search</h2>

						<?php get_search_form(); ?>

						<ul class="o-layout -gutter-small || o-list">
							<?php
								while ( have_posts() ) :
									the_post();
							?>
							<li class="o-layout_item u-1/4@from-medium || o-list_item">
								<?php
									/**
									* Run the loop for the search to output the results.
									* If you want to overload this in a child theme then include a file
									* called content-search.php and that will be used instead.
									*/
									get_template_part( 'partials/post/content', 'excerpt' );
								?>
							</li>
							<?php endwhile; ?>
						</ul>

						<?php
							the_posts_pagination(
								array(
									'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page', 'UI' ) . '</span>',
									'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'UI' ) . '</span>',
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'UI' ) . ' </span>',
								)
							);
						?>

					</div><!-- ends .o-container -->
				</section>

				<?php
					else :
				?>

				<section data-scroll-section>
					<p>else if ( have_posts() )</p>
					<div class="o-container">
						<p>
							<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'UI' ); ?>
						</p>

						<h2>try searching again</h2>
						<?php get_search_form(); ?>
					</div><!-- ends .o-container -->
				</section>
				
				<?php endif; ?>
				
				<?php get_footer(); ?>

			</div>
		</div>

	</main>

</body>
</html>
