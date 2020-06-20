<?php

/* Template name: 0 Homepage */

?>

	<?php get_header(); ?>

	<main data-barba="wrapper">

		<div data-barba="container" data-barba-namespace="homepage">
			<div class="o-scroll" id="js-scroll" data-scroll-container>

				<?php get_template_part( 'partials/new/transition-lines'); ?>

				<?php get_template_part( 'partials/new/homepage/hero'); ?>

				<section data-scroll-section>
					<div class="o-container">
						<div class="c-summary" data-scroll data-scroll-offset="100">
							<div class="o-layout -gutter">
								<div class="o-layout_item u-2/5@from-medium">
									<p class="c-summary_text t-fontsize">
										Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum assumenda accusantium consequatur quas dolor provident modi rerum eum. Accusamus reiciendis eum neque fugit perspiciatis? Repudiandae accusamus dolor saepe officiis non.
									</p>
								</div>
								<div class="o-layout_item u-3/5@from-medium">
									<ul class="c-summary_list">
										<li class="c-summary_list_item u-label" data-scroll>
											<a href="#peaches" data-scroll-to>
												Peaches
												<span class="c-summary_list_icon u-icon">
													🍑
												</span>
											</a>
										</li>
										<li class="c-summary_list_item u-label" data-scroll>
											<a href="#cherries" data-scroll-to>
												Cherries
												<span class="c-summary_list_icon u-icon">
													🍒
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="c-section" data-scroll-section>
					<div class="o-container" id="peaches">
						<div class="o-layout -gutter">
							<div class="o-layout_item u-2/5@from-medium">
								<div class="c-section_infos -padding" data-scroll data-scroll-speed="-2" data-scroll-call="test">
									<div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
										<h3>
											01. <br>
											Peaches
										</h3>
										<div class="c-sections_infos_text u-text">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores perspiciatis, voluptatibus recusandae eligendi similique omnis voluptate! Illo ad, ducimus numquam blanditiis nisi rerum eum eligendi, eos expedita dolores officiis hic qui impedit. Ipsa corporis ullam voluptate accusamus. Harum, at inventore ut nemo recusandae magni.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="o-layout_item u-3/5@from-medium">
								<div class="c-speed-block" data-scroll data-scroll-speed="2">
									<div class="o-image_wrapper" data-scroll data-scroll-call="" data-scroll-repeat>
										<div class="o-image" data-scroll>
											<img class="c-speed-block_image" src="/wp-content/themes/ui/src/images/homepage/image_1.jpg" alt="placeholder image">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="o-layout -gutter -bottom">
							<div class="o-layout_item u-2/5@from-medium">
								<div class="c-speed-block" data-scroll data-scroll-speed="4">
									<div class="o-image_wrapper" data-scroll data-scroll-call="" data-scroll-repeat>
										<div class="o-image" data-scroll data-scroll-speed="-1.5">
											<img class="c-speed-block_image" src="/wp-content/themes/ui/src/images/homepage/image_2.jpg" alt="placeholder image">
										</div>
									</div>
								</div>
							</div>
							<div class="o-layout_item u-3/5@from-medium">
								<div class="o-layout u-text-right">
									<div class="o-layout_item u-1/2@from-medium">
										<div class="c-speed-block -margin" data-scroll data-scroll-speed="6">
											<div class="o-image_wrapper" data-scroll data-scroll-call="" data-scroll-repeat>
												<div class="o-image" data-scroll data-scroll-speed="-2">
													<img class="c-speed-block_image" src="/wp-content/themes/ui/src/images/homepage/image_3.jpg" alt="placeholder image">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="c-section" data-scroll-section>
					<div class="o-container" id="cherries">
						<div class="o-layout -gutter">
							<div class="o-layout_item u-2/5@from-medium">
								<div class="c-section_infos -padding" data-scroll data-scroll-speed="-2" data-scroll-call="test">
									<div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
										<h3>
											01. <br>
											Cherries
										</h3>
										<div class="c-sections_infos_text u-text">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores perspiciatis, voluptatibus recusandae eligendi similique omnis voluptate! Illo ad, ducimus numquam blanditiis nisi rerum eum eligendi, eos expedita dolores officiis hic qui impedit. Ipsa corporis ullam voluptate accusamus. Harum, at inventore ut nemo recusandae magni.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="o-layout_item u-3/5@from-medium">
								<div class="c-speed-block" data-scroll data-scroll-speed="4">
									<div class="o-image_wrapper" data-scroll data-scroll-call="" data-scroll-repeat>
										<div class="o-image" data-scroll>
											<img class="c-speed-block_image" src="/wp-content/themes/ui/src/images/homepage/image_4.jpg" alt="placeholder image">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="o-layout -gutter -bottom">
							<div class="o-layout_item u-2/5@from-medium">
								<div class="c-speed-block" data-scroll data-scroll-speed="4">
									<div class="o-image_wrapper" data-scroll data-scroll-call="" data-scroll-repeat>
										<div class="o-image" data-scroll data-scroll-speed="-1.5">
											<img class="c-speed-block_image" src="/wp-content/themes/ui/src/images/homepage/image_5.png" alt="placeholder image">
										</div>
									</div>
								</div>
							</div>
							<div class="o-layout_item u-3/5@from-medium">
								<div class="o-layout u-text-right">
									<div class="o-layout_item u-1/2@from-medium">
										<div class="c-speed-block -margin" data-scroll data-scroll-speed="6">
											<div class="o-image_wrapper" data-scroll data-scroll-call="" data-scroll-repeat>
												<div class="o-image" data-scroll data-scroll-speed="-2">
													<img class="c-speed-block_image" src="/wp-content/themes/ui/src/images/homepage/image_6.jpg" alt="placeholder image">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section data-scroll-section style="box-shadow: 0 0 0 1px #000;">
					<div class="o-container">
						<div class="c-cta_line" data-scroll>
							<h1>Book now</h1>
						</div>
					</div>
				</section>

				<section data-scroll-section style="box-shadow: 0 0 0 1px #000;">
					<div class="o-container">
						<div class="c-features_item" data-scroll>
							<h1>damn</h1>
							<div class="c-features_item">one</div>
							<div class="c-features_item">one</div>
							<div class="c-features_item">one</div>
							<div class="c-features_item">one</div>
							<div class="c-features_item">one</div>
						</div>
					</div>
				</section>

				<section data-scroll-section style="box-shadow: 0 0 0 1px #000;">
					<div class="o-container">
						<div class="c-fixed_wrapper" data-scroll>
							<h1>fixed</h1>
						</div>
					</div>
				</section>

				<section data-scroll-section style="box-shadow: 0 0 0 1px #000;">
					<div class="o-container">
						<div class="c-intro" data-scroll>
							<h1>intro</h1>
						</div>
					</div>
				</section>

				<section data-scroll-section style="box-shadow: 0 0 0 1px #000;">
					<div class="o-container">
						<div class="c-summary" data-scroll>
							<h1>summary</h1>
						</div>
					</div>
				</section>

				<section data-scroll-section>
					<div class="o-container">
						<div class="c-lookbook" id="lookbook-section">
							<h1 class="o-title" data-scroll>Lookbook</h1>
							<nav class="c-nav-huge">
								<ul class="c-nav-huge_menu">
									<li class="c-nav-huge_item">
										<a class="c-nav-huge_link" href="/shop/glass">Glass</a>
									</li>
									<li class="c-nav-huge_item">
										<a class="c-nav-huge_link" href="/shop/wood">Wood</a>
									</li>
									<li class="c-nav-huge_item">
										<a class="c-nav-huge_link" href="/shop/metal">Metal</a>
									</li>
									<li class="c-nav-huge_item">
										<a class="c-nav-huge_link" href="/shop/plastic">Plastic</a>
									</li>
									<li class="c-nav-huge_item">
										<a class="c-nav-huge_link" href="/shop/fabrics">Fabrics</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</section>

				<section data-scroll-section>
					<div class="o-container">
						<div class="c-damn">
							<h1 class="o-title" data-scroll>
								<span class="o-title_line">
									<span>
										Give us
									</span>
								</span>
								<span class="o-title_line">
									<span>
										all of
									</span>
								</span>
								<span class="o-title_line">
									<span>
										your
									</span>
								</span>
								<span class="o-title_line u-white">
									<span>
										money
									</span>
								</span>
							</h1>
						</div>
					</div>
				</section>

			<?php get_footer(); ?>

			</div>
		</div>

	</main>

</body>
</html>
