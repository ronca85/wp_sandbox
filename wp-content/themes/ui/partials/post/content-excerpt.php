<?php
/**
* Template part for displaying post archives and search results
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
*
*
* THIS PARTIAL IS LISTED ON SEARCH RESULTS PAGE IF SEARCH TERM MATCHES ITS CONTENTS
*/
?>
<article class="o-flex -fullwidth">
	<a href="<?php the_permalink(); ?>" class="c-preview || o-flex -flex-column -justify-between">
		<div class="c-preview_media">
			<figure class="c-preview_image-wrap">
				<div class="c-preview_image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
				<div class="c-preview_image_overlay"></div>
			</figure>
			<div class="c-preview_categories">
				<ul class="c-preview_categories_list">
					<li class="c-preview_categories_list_item">
						<span class="c-preview_categories_list_item_label || o-tab-category -category_1">Predict<span class="o-tab-category_label"> Dx</span></span>
					</li>
					<li class="c-preview_categories_list_item">
						<span class="c-preview_categories_list_item_label || o-tab-category -category_2">Predict<span class="o-tab-category_label"> Rx</span></span>
					</li>
					<li class="c-preview_categories_list_item">
						<span class="c-preview_categories_list_item_label || o-tab-category -category_3">Predict<span class="o-tab-category_label"> Ix</span></span>
					</li>
				</ul>
			</div>
		</div>

		<div class="c-preview_content">
			<div class="c-preview_content_inner">
				<h1 class="c-preview_content_title"><?php the_excerpt(); ?></h1>

				<div class="c-preview_content_footer">
					<div class="c-preview_content_footer_info">
						<span>AMS Staff</span>
						<span>■</span>
						<span>07/22/2019</span>
						<span>■</span>
						<span>0 Comments</span>
					</div>

					<span class="c-preview_content_footer_arrow">
						<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M15 4l8 8-8 8M0 12h22" stroke="#F16522" stroke-width="2" fill="none" fill-rule="evenodd"/></svg>
					</span>
				</div>
			</div>
		</div>
	</a>
</article>