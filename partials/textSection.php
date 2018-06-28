<?php
	/**
	 * Template Name: Partial - Text Section
	 *
	 * @package WordPress
	 * @subpackage MyMembership
	 * @since MyMembership 1.0
	 */

	$id = get_the_ID();
	$textHeadline = get_field('text_headline', $id);
	$textBody = get_field('text_body', $id);

	include ( locate_template('header.php') );
?>
	<section class="section section--light-grey">
		<div class="limit">
			<div class="section__col-left">
				<h2>
					<?php echo $textHeadline; ?>
				</h2>
			</div>
			<div class="section__col-right">
				<?php echo $textBody; ?>
				<br/>
				<a href="/MyMembership/"  style="color:#fff;font-weight:bold;">
					<svg class="closeBtn" viewBox="0 0 35 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="Desktop-HD" transform="translate(-766.000000, -694.000000)">
								<g id="Group" transform="translate(766.000000, 694.000000)">
									<circle id="Oval" fill="#FFFFFF" cx="17.5" cy="17.5" r="17.5"></circle>
									<g id="Group-15" transform="translate(11.000000, 11.000000)" stroke="#9B9B9B" stroke-linecap="square" stroke-width="2">
										<path d="M0.583333333,0.583333333 L13.3235256,13.3235256" id="Line"></path>
										<path d="M0.583333333,0.583333333 L13.3235256,13.3235256" id="Line" transform="translate(7.000000, 7.000000) scale(1, -1) translate(-7.000000, -7.000000) "></path>
									</g>
								</g>
							</g>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</section>

	<?php
	include ( locate_template('partials/main.php') );

	include ( locate_template('footer.php') );
?>