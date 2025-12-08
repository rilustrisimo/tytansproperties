<?php
/**
 * Template Name: Tytans Contact Us
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
$fields_home = get_fields(7);

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<!-- section about -->
		<div class="container contact-us page-content">
			<div class="row">
				<div class="col-md-12 text-center map">
				<iframe src="<?php echo $fields['section_map']['map_link']; ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 contacts">
					<div class="contacts-container">
						<?php foreach($fields['contact_details'] as $contact): ?>
						<div class="item">
							<div class="icon"><img src="<?php echo $contact['icon']['url']; ?>"></div>
							<div class="details"><?php echo $contact['details']; ?></div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-md-7">
					<?php echo do_shortcode('[contact-form-7 id="3c0c660" title="Contact Page Form"]'); ?>
				</div>
			</div>
		</div>
		<!-- section logo -->
		<div class="container-fluid section section_logos">
			<div class="row">
				<div class="col-md-12 text-center logos">
					<?php foreach($fields_home['section_logos']['logos'] as $logo): ?>
					<div class="item"><img src="<?php echo $logo['url']; ?>"></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- section logo end -->

	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
