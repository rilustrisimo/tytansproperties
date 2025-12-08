<?php
/**
 * Template Name: Buyers Guide
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @version   1.0.0
 */

/**
 * No direct access to this file.
 *
 * @since 1.0.0
 */
defined( 'ABSPATH' ) || die();

get_header();

$fields = get_fields(get_the_ID());

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<!-- section about -->
		<div class="container about-us page-content">
			<div class="row">
				<div class="col-md-12 page-content__content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
