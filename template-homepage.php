<?php
/**
 * Template Name: Homepage
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

$fields = get_fields(get_the_ID());

get_header();

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<!-- section about -->
		<div class="container section section_about">
			<div class="row">
				<div class="col-md-12 headings">
					<h2><?php echo $fields['section_about']['sub_title']; ?></h2>
					<h1><?php echo $fields['section_about']['title']; ?></h1>
					<div class="divider--default"></div>
				</div>
				<div class="col-md-12 text-center">
					<p><?php echo $fields['section_about']['description']; ?></p>
				</div>
			</div>
			<div class="row items">
				<?php foreach($fields['section_about']['section_items'] as $item): ?>
					<div class="col-md-4 text-center item">
						<div class="item-container">
							<div class="item-icon"><img src="<?php echo $item['icon']['url']; ?>"></div>
							<div class="item-title"><?php echo $item['title']; ?></div>
							<div class="item-desc"><p><?php echo $item['description']; ?></p></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row items">
				<div class="col-md-12 text-center">
					<p><?php echo $fields['section_about']['post_about']; ?></p>
				</div>
			</div>
		</div>
		<!-- section about end -->

		<!-- section tambuli -->
		<div class="container-fluid section section_tambuli">
			<div class="row">
				<div class="col-md-6 left-image"><img src="<?php echo $fields['section_tambuli']['left_background']['url']; ?>"></div>
				<div class="col-md-6 contents" style="background-image:url(<?php echo $fields['section_tambuli']['right_background']['url']; ?>)">
					<div class="title"><?php echo $fields['section_tambuli']['title']; ?></div>
					<div class="subtitle"><?php echo $fields['section_tambuli']['subtitle']; ?></div>
					<div class="description"><p><?php echo $fields['section_tambuli']['description']; ?><p></div>
					<div class="button-cont"><a href="<?php echo $fields['section_tambuli']['button']['page_link']; ?>"><?php echo $fields['section_tambuli']['button']['button_text']; ?> <i class="fa-solid fa-caret-right"></i></a></div>
				</div>
			</div>
		</div>
		<!-- section tambuli end -->

		<!-- section gallery -->
		<div class="container-fluid section section_gallery">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><?php echo $fields['section_gallery']['title']; ?></h1>
					<div class="divider--default gallery"></div>
					<p><?php echo $fields['section_gallery']['description']; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="gallery-carousel-wrapper">
						<div class="gallery-carousel">
							<?php foreach($fields['section_gallery']['gallery'] as $item): ?>
								<div class="gallery-slide">
									<img src="<?php echo $item['url']; ?>" alt="<?php echo $item['alt'] ? $item['alt'] : 'Gallery Image'; ?>">
									<div class="gallery-overlay">
										<i class="fa-solid fa-search-plus"></i>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section gallery end -->

		<!-- section logo -->
		<div class="container-fluid section section_logos">
			<div class="row">
				<div class="col-md-12 text-center logos">
					<?php foreach($fields['section_logos']['logos'] as $logo): ?>
					<div class="item"><img src="<?php echo $logo['url']; ?>"></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- section logo end -->

		<!-- section map -->
		<div class="container-fluid section section_map">
			<div class="row">
				<div class="col-md-12 text-center map">
				<iframe src="<?php echo $fields['section_map']['map_link']; ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
		<!-- section map end -->

	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
