<?php
/**
 * Footer template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package Eyorsogood_Design
 * @version   1.0.0
 */

$is_back_to_top = qed_get_option( 'back-to-top', 'option' );
do_action('eyor_after_main_content');

$footer_about = qed_get_option( 'footer_about', 'option' );
$footer_contact_title = qed_get_option( 'footer_contact_title', 'option' );
$footer_contact_subtitle = qed_get_option( 'footer_contact_subtitle', 'option' );
$footer_items = qed_get_option( 'footer_items', 'option' );
$footer_root_url = qed_get_option( 'footer_root_url', 'option' );
$footer_bg = qed_get_option( 'footer_bg', 'option' );

?>

<footer class="footer">
	<div class="footer__top" style="background-image:url(<?php echo $footer_bg['url']; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="footer-logo"><?php get_template_part( 'templates/header/logo' ); ?></div>
					<div class="footer-about"><?php echo $footer_about; ?></div>
					<div class="footer-subscribe"><?php echo do_shortcode('[contact-form-7 id="b004f81" title="Footer Subscribe"]'); ?></div>
				</div>
				<div class="col-md-4 deets">
					<div class="footer-title"><?php echo $footer_contact_title; ?></div>
					<div class="footer-subtitle"><?php echo $footer_contact_subtitle; ?></div>
					<div class="footer-items">
						<?php foreach($footer_items as $item): ?>
							<div class="item">
								<div class="icon"><img src="<?php echo $item['icon']['url']?>"></div>
								<div class="value"><?php echo $item['item_value']; ?></div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<?php
		if ( $is_back_to_top ) {
			echo '<div class="footer__arrow-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>';
		}
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="footer__url"><?php echo $footer_root_url; ?></div>
				</div>
				<div class="col-md-6 text-right">
					<div class="footer__copyright"><?php echo qed_esc_text( qed_get_option( 'footer_text_note', 'option', '© 2020 - Eyorsogood | Development and Design by Rouie Ilustrisimo' ), 'option_input', true ); ?></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<input type="hidden" id="base-url" value="<?php echo home_url(); ?>">
<input type="hidden" id="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">
<?php
get_template_part( 'templates/footer/footer', 'clean' );
