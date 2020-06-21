<?php
/*
Template Name: Archives
*/
?>

	<?php get_header(); ?>

	<main data-barba="wrapper">

		<div data-barba="container" data-barba-namespace="archive">
			<div class="o-scroll" id="js-scroll" data-scroll-container>
				<p>Template Name - Archives</p>

				<?php
					if ( have_posts() ) :
				?>
				<section data-scroll-section>
					<p>if ( have_posts() )</p>

					<div class="o-container">
						<div class="o-layout -gutter-small">

							<div class="o-layout_item u-1/3@from-medium">

								<div class="o-input-wrap || u-margin-bottom-1/4-unit">
									<label class="o-form_label">ARCHIVE</label>
									<div class="o-select-wrap">
										<select class="o-select" id="select_year" name="select_year" onChange='document.location.href=this.options[this.selectedIndex].value;'>
											<option value=""><?php echo attribute_escape(__('Select Year')); ?></option>
											<?php wp_get_archives('type=yearly&format=option&show_post_count=1'); ?>
										</select>
									</div>
								</div>

								<div class="o-input-wrap">
									<div class="o-select-wrap">
										<select class="o-select" id="select_month" name="select_month" onChange='document.location.href=this.options[this.selectedIndex].value;'>
											<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
											<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
										</select>
									</div>
								</div>

								<h2>search by keyword</h2>

								<?php get_search_form(); ?>

								<h2>Archives by Month:</h2>
								<ul>
									<?php wp_get_archives('type=monthly'); ?>
								</ul>
						
								<h2>Archives by Subject:</h2>
								<ul>
									<?php wp_list_categories(); ?>
								</ul>
							</div>

							<div class="o-layout_item u-2/3@from-medium">

								<ul class="o-layout -gutter-small || o-list">
									<?php
										while ( have_posts() ) :
											the_post();
									?>
									<li class="o-layout_item u-1/2@from-medium || o-list_item">
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

							</div><!-- ends .o-layout_item -->
						</div><!-- ends .o-layout -->
						
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
						<?php get_search_form();

					endif; ?>
					</div><!-- ends .o-container -->
				</section>
			
				<?php get_footer(); ?>
				
			</div>
		</div>

	</main>

</body>
</html>
