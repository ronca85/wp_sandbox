<?php

/* Template name: 0 Contact */

?>

	<?php get_header(); ?>

	<main data-barba="wrapper">

		<div data-barba="container" data-barba-namespace="contact">
			<div class="o-scroll" id="js-scroll" data-scroll-container>

				<?php get_template_part( 'partials/new/transition-lines'); ?>

				<?php get_template_part( 'partials/new/contact/hero'); ?>

				<?php get_template_part( 'partials/new/contact/form'); ?>
				
				<?php get_footer(); ?>

			</div>
		</div>

	</main>

</body>
</html>
