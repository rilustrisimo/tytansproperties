<?php
/**
 * Template Name: Tambuli Seaside Living
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
		<div class="container tambuli page-content">
			<div class="row">
				<div class="col-md-6 page-content__content">
					<?php the_content(); ?>
				</div>
				<div class="col-md-6 page-content__carousel">
					<div class="item-container main-carousel">
					<?php foreach($fields['featured_images'] as $item): ?>
						<div class="item-picture"><img src="<?php echo $item['url']; ?>"></div>
					<?php endforeach; ?>
					</div>
					<div class="item-container main-carousel-nav">
					<?php foreach($fields['featured_images'] as $item): ?>
						<div class="item-picture"><img src="<?php echo $item['url']; ?>"></div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 page-content__left">
					<div class="specs">
						<?php foreach($fields['specs']['specs_item'] as $item): ?>
						<div class="specs__item">
							<div class="specs__icon"><img src="<?php echo $item['icon']['url']; ?>"></div>
							<div class="specs__deets">
								<div class="title"><?php echo $item['title']; ?></div>
								<div class="value"><?php echo $item['content']; ?></div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>

					<div class="towers">
						<?php foreach($fields['towers'] as $item): ?>
						<div class="towers__item row">
							<div class="col-md-12 towers__name"><?php echo $item['tower_name']; ?></div>
							<div class="col-md-12 towers__deets">
								<div class="row">
									<?php foreach($item['tower_specs'] as $item2): ?>
										<div class="col-md-6 towers__item-item">
											<div class="towers__icon"><img src="<?php echo $item2['icon']['url']; ?>"></div>
											<div class="towers__deets">
												<div class="title"><?php echo $item2['title']; ?></div>
												<div class="value"><?php echo $item2['content']; ?></div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-md-6 page-content__right">
					<div class="units">
						<?php foreach($fields['units'] as $key => $item): ?>
							<div class="units__container" data-id="<?php echo $key; ?>">
								<div class="units__header">
									<div class="units__name"><?php echo $item['unit_name']; ?></div>
									<?php foreach($item['unit_specs'] as $item2): ?>
									<div class="units__specs">
										<div class="icon"><img src="<?php echo $item2['icon']['url']; ?>"></div>
										<div class="content"><?php echo $item2['content']; ?></div>
									</div>
									<?php endforeach; ?>
								</div>
								<div class="units__carousel" data-id="<?php echo $key; ?>">
									<?php foreach($item['images'] as $item3): ?>
										<div class="item-picture"><img src="<?php echo $item3['url']; ?>"></div>
									<?php endforeach; ?>
								</div>
								<div class="units__carousel-nav" data-id="<?php echo $key; ?>">
									<?php foreach($item['images'] as $item3): ?>
									<div class="item-picture"><img src="<?php echo $item3['url']; ?>"></div>
									<?php endforeach; ?>
								</div>
								
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="row building_features">
				<div class="col-md-12">
					<h2><?php echo $fields['building_features']['title']; ?></h2>
				</div>
				<div class="col-md-12">
					<div class="row features">
						<?php foreach($fields['building_features']['features'] as $item): ?>
							<div class="col-md-6 features__item"><?php echo $item['value']; ?></div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center map">
					<iframe src="<?php echo $fields['map']; ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
		<!-- section gallery -->
		<div class="container amenities">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><?php echo $fields['amenities_title']; ?></h1>
					<div class="divider--default gallery"></div>
					<p><?php echo $fields['amenities_sub_title']; ?></p>
				</div>
			</div>
			<div class="row units">
				<?php foreach($fields['amenities'] as $key => $item): ?>
					<div class="units__container col-md-6" data-id="<?php echo $key; ?>">
						<div class="units__header">
							<div class="units__name"><?php echo $item['amenity_name']; ?></div>
							<?php if(false): ?>
								<?php foreach($item['amenity_specs'] as $item2): ?>
								<div class="units__specs">
									<div class="icon"><img src="<?php echo $item2['icon']['url']; ?>"></div>
									<div class="content"><?php echo $item2['content']; ?></div>
								</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<?php if(isset($item['images'])): ?>
							<div class="units__carousel" data-id="<?php echo $key; ?>">
								<?php foreach($item['images'] as $item3): ?>
									<div class="item-picture"><div class="img" style="background-image:url(<?php echo $item3['url']; ?>)"></div></div>
								<?php endforeach; ?>
							</div>
							<div class="units__carousel-nav" data-id="<?php echo $key; ?>">
								<?php foreach($item['images'] as $item3): ?>
								<div class="item-picture"><img src="<?php echo $item3['url']; ?>"></div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- section gallery end -->

	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
