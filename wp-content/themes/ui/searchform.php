<form class="o-form" method="GET" action="<?php bloginfo('url'); ?>">
	<div class="o-input-wrap">
		<label for="id_search" class="o-form_label || o-label">Search</label>
		<div class="o-input-wrap">
			<input id="id_search" class="o-input" type="text" name="s" placeholder="Search" value="<?php the_search_query(); ?>" />
			<button class="o-input_button" type="submit">
				<span class="o-icon">
					<svg xmlns="http://www.w3.org/2000/svg">
						<path d="M10.058 1a9.058 9.058 0 016.96 14.854l6.922 6.922-1.164 1.164-6.922-6.922A9.058 9.058 0 1110.058 1zm0 1.647a7.41 7.41 0 100 14.822 7.41 7.41 0 000-14.822z" />
					</svg>
				</span>
				<span class="u-screen-reader-text"><?php echo __("Search", "UI"); ?></span>
			</button>
		</div>
	</div>
</form>