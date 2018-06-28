<?php
	/**
	 * Template Name: Partial - Main Page
	 *
	 * @package WordPress
	 * @subpackage MyMembership
	 * @since MyMembership 1.0
	 */

	// First Section
	$firstSectHeadline = get_field('first_sect_headline', $homeID);
	$firstSectBody = get_field('first_sect_body', $homeID);
	$resourceCounter = 1;

	// Second Section
	$secondSectHeadline = get_field('second_sect_headline', $homeID);
	$secondSectBody = get_field('second_sect_body', $homeID);
	$valueCounter = 1;

	// Third Section
	$thirdSectHeadline = get_field('third_sect_headline', $homeID);
	$thirdSectBody = get_field('third_sect_body', $homeID);

?>

<section class="section section--light-grey-2" id="js-section1">
	<div class="limit">
		<!-- Floaty circles -->
		<svg class="circle circle--sm" width="117px" height="117px" viewBox="0 0 117 117" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
		    <desc>Created with Sketch.</desc>
		    <defs></defs>
		    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-HD" transform="translate(-1265.000000, -182.000000)" fill="#EE7C71">
		            <path d="M1382,240.5 C1382,272.808603 1355.8086,299 1323.5,299 C1291.1914,299 1265,272.808603 1265,240.5 C1265,208.191397 1291.1914,182 1323.5,182 C1355.8086,182 1382,208.191397 1382,240.5" id="Fill-3"></path>
		        </g>
		    </g>
		</svg>		

		<svg class="circle circle--smallest" width="47px" height="47px" viewBox="0 0 47 47" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
		    <desc>Created with Sketch.</desc>
		    <defs></defs>
		    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-HD" transform="translate(-203.000000, -676.000000)" fill="#E6E8E8">
		            <path d="M226.5,723 C219.979736,723 214.432182,720.713616 209.860324,716.140699 C205.287571,711.567781 203,706.02021 203,699.500075 C203,693.071 205.287571,687.546269 209.860324,682.927672 C214.432182,678.309224 219.979736,676 226.5,676 C233.020264,676 238.566773,678.309224 243.139676,682.927672 C247.712578,687.546269 250,693.071 250,699.500075 C250,706.02021 247.712578,711.567781 243.139676,716.140699 C238.566773,720.713616 233.020264,723 226.5,723" id="Fill-1"></path>
		        </g>
		    </g>
		</svg>

		<svg class="circle circle--med" width="202px" height="202px" viewBox="0 0 202 202" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
		    <desc>Created with Sketch.</desc>
		    <defs></defs>
		    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-HD" transform="translate(-128.000000, -946.000000)" fill="#5867FF">
		            <path d="M330,1047 C330,1102.78073 284.780732,1148 229,1148 C173.219268,1148 128,1102.78073 128,1047 C128,991.219268 173.219268,946 229,946 C284.780732,946 330,991.219268 330,1047" id="Fill-8"></path>
		        </g>
		    </g>
		</svg>
		<!-- End floaty circles -->


		<!-- FIRST CONTENT: BEGIN YOUR JOURNEY -->
		<div class="section__col-left">
			<h2><?php echo $firstSectHeadline; ?></h2>
		</div>

		<!-- 8 CIRCLES -->
		<div class="section__col-right">
			<?php echo $firstSectBody; ?>
			<div class="resources">

				<?php 
					while ( have_rows('first_sect_resources', $homeID) ) : 

						the_row();

						$resourceName = get_sub_field('resource_name');
						$resourceLink = get_sub_field('resource_link');
				?>
				<a href="<?php echo $resourceLink; ?>" class="resource-<?php echo $resourceCounter; ?> resources__link tip" title="">
					<span class="tooltips"></span><span class="resources__name"><?php echo $resourceName; ?></span>
				</a>
				
				<?php 
						$resourceCounter++;

						if ($resourceCounter == 9) $resourceCounter = 1;

					endwhile; 
				?>
			</div>
		</div>
		<div class="clear-both"></div>
	</div>
</section>

<section class="section" id="js-section--values">
	<!-- Floaty circle -->
		<svg class="circle circle--xtraLg" width="250px" height="316px" viewBox="0 0 250 316" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
		    <desc>Created with Sketch.</desc>
		    <defs></defs>
		    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-HD" transform="translate(-1190.000000, -1514.000000)" fill="#FF931C">
		            <path d="M1348,1830 C1260.73905,1830 1190,1759.26095 1190,1672 C1190,1584.73905 1260.73905,1514 1348,1514 C1435.26095,1514 1506,1584.73905 1506,1672 C1506,1759.26095 1435.26095,1830 1348,1830 Z" id="Fill-8"></path>
		        </g>
		    </g>
		</svg>		
	<!-- End floaty circle -->
	<div class="limit">
		<!-- Floaty circle -->
		<svg class="circle circle--xtraSm" width="92px" height="92px" viewBox="0 0 92 92" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
		    <desc>Created with Sketch.</desc>
		    <defs></defs>
		    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-HD" transform="translate(-1144.000000, -1128.000000)" fill="#CC18B7">
		            <path d="M1236,1174 C1236,1199.40509 1215.40509,1220 1190,1220 C1164.59491,1220 1144,1199.40509 1144,1174 C1144,1148.59491 1164.59491,1128 1190,1128 C1215.40509,1128 1236,1148.59491 1236,1174" id="Fill-8"></path>
		        </g>
		    </g>
		</svg>
		<!-- End floaty circles -->		
		<div class="section__col-left">
			<h2><?php echo $secondSectHeadline; ?></h2>
		</div>	
		<div class="section__col-right">
			<?php echo $secondSectBody; ?>
			<div class="values" id="js-values">
				<?php
					while ( have_rows('second_sect_values', $homeID) ) :

						the_row();

						$valueGraphic = get_sub_field('value_graphic')['url'];
						$valueTitle = get_sub_field('value_title');
				?>
					<div class="value value-<?php echo $valueCounter; ?>" data-index="<?php echo $valueCounter; ?>">
						<img src="<?php echo $valueGraphic; ?>" class="value__graphic" />
						<span class="value__title"><?php echo $valueTitle; ?></span>
					</div>
				<?php 
						$valueCounter++;

						if ($valueCounter == 4) $valueCoutner = 1;

					endwhile; 
				?>
			</div>
		</div>
		<div class="clear-both"></div>
	</div>
</section>

<section class="section section--light-grey hidden" id="js-section--value-content">
	<div class="limit">
		<div class="value__content">
			<?php
				$valueCounter = 1;

				while ( have_rows('second_sect_values', $homeID) ) :

					the_row();

					$valueBody = get_sub_field('value_body');
			?>
				<div class="value__content-item hidden" data-index="<?php echo $valueCounter; ?>">
					<?php echo $valueBody; ?>
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
			<?php
				$valueCounter++;

				if ($valueCounter == 4) $valueCounter = 1;

				endwhile;
			?>
			
		</div>
		
			
	</div>
</section>

<section class="section section--light-grey-2">
	<div class="limit">
		<div class="section__col-left">
			<h2>
				<span style="position:relative; z-index: 2;"><?php echo $thirdSectHeadline; ?></span>
					<!-- Floaty circle -->
					<svg class="circle circle--lg" width="268px" height="268px" viewBox="0 0 268 268" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					    <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
					    <desc>Created with Sketch.</desc>
					    <defs></defs>
					    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <g id="Desktop-HD" transform="translate(-249.000000, -1774.000000)" fill="#82F5C4">
					            <path d="M517,1908 C517,1982.00612 457.006119,2042 383,2042 C308.993881,2042 249,1982.00612 249,1908 C249,1833.99388 308.993881,1774 383,1774 C457.006119,1774 517,1833.99388 517,1908" id="Fill-8"></path>
					        </g>
					    </g>
					</svg>
					<!-- End floaty circle -->	
			</h2>
		</div>
		<div class="section__col-right">
			<?php echo $thirdSectBody; ?>
			<div class="brands">
				<?php
					while ( have_rows('third_sect_brands') ) :

						the_row();

						$brandLogo = get_sub_field('brand_logo')['url'];
						$brandLink = get_sub_field('brand_link');
				?>
					<a href="<?php echo $brandLink; ?>" class="brand__link" />
						<img src="<?php echo $brandLogo; ?>" class="brand__logo">
					</a>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>