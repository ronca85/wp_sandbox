<section data-scroll-section>
	<div class="o-container">
		
		<div class="o-form || u-padding-y-unit@to-medium u-padding-y-unit@from-medium">
			<div class="o-container">

				<p>for use on homepage</p>
				<h1 class="o-h2 || u-text-center u-margin-bottom-1/2-small-unit@to-medium u-margin-bottom-small-unit@from-medium">
					<?php echo esc_html__("Contact Us", "theme_UI"); ?>
				</h1>

				<div class="o-layout -gutter">
					<div class="o-layout_item u-2/3@from-medium">
						<form>
							<div class="o-layout -gutter -middle">
								<div class="o-layout_item u-1/2@from-medium">

									<div class="o-input-wrap">
										<label class="o-label" for="id_full_name">Full name *</label>
										<input class="o-input" type="text" id="id_full_name" name="id_full_name" required="" placeholder="e.g. Jane Doe">
									</div>
								</div>

								<div class="o-layout_item u-1/2@from-medium">
									<div class="o-input-wrap">
										<label class="o-label" for="id_email">Email *</label>
										<input class="o-input" type="email" id="id_email" name="id_email" required="" placeholder="e.g. jane.doe@example.com">
									</div>
								</div>

								<div class="o-layout_item u-1/2@from-medium">
									<div class="o-input-wrap">
										<label class="o-label" for="id_company">Company</label>
										<input class="o-input" type="text" id="id_company" name="id_company" required="" placeholder="e.g. Example LTD">
									</div>
								</div>
							</div>

							<div class="o-input-wrap">
								<label class="o-label" for="id_message">Comment / Question / Message</label>
								<textarea class="o-textarea" id="id_message" name="message"></textarea>
							</div>

							<div class="o-form_footer">
								<div class="o-form_footer_item || o-form_confirmation">
									<span class="js-confirmation">
										error / success messages
									</span>
								</div>

								<div class="o-form_footer_item">
									<button class="o-button -outline -padding-x-bigger" data-form="button" type="submit">
										<span class="o-button_label">Submit</span>
									</button>
								</div>
							</div>
						</form>
					</div>

					<div class="o-layout_item u-1/3@from-medium">
						<address class="u-margin-bottom-1/2-unit@to-medium u-margin-bottom-unit@from-medium">
							UI company<br>
							Vrhovčev vijenac 40<br>
							10000 Zagreb
						</address>

						<ul>
							<li>
								<label class="o-label">Telefon</label>
								<span class="o-list_item_label">01/6200-555</span>
							</li>
							<li>
								<label class="o-label">Fax</label>
								<span class="o-list_item_label">01/6200-555</span>
							</li>
							<li>
								<label class="o-label">E-mail</label>
								<span class="o-list_item_label">
									<a href="mailto:info@mdstrat.com">developer@pointjupiter.com</a>
								</span>
							</li>
						</ul>
					</div>

				</div>
				
			</div>
		</div>
		
	</div>
</section>