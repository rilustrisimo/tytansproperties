<?php
/**
 * Template Name: About Us
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
			<!--
			<div class="row items">
				<?php foreach($fields['personnel_items'] as $item): ?>
					<div class="col-md-3 text-center item">
						<div class="item-container">
							<div class="item-picture"><img src="<?php echo $item['picture']['url']; ?>"></div>
							<div class="item-fullname"><?php echo $item['full_name']; ?></div>
							<div class="item-position"><?php echo $item['position']; ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
				-->
		</div>

	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
