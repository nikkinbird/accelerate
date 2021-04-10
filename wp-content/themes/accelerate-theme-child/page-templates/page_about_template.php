<?php  /** Template Name: About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about_page hero-content">
		<div class="about_content" role="about">
			<?php while ( have_posts() ) : the_post();
					$overview_title = get_field('overview_title');
					$overview_text = get_field('overview_text'); 
					$image_1 = get_field('image_1');
					$title_1 = get_field('service_title_1');
					$desc_1 = get_field('service_desc_1');
					$image_2 = get_field('image_2');
					$title_2 = get_field('service_title_2');
					$desc_2 = get_field('service_desc_2');
					$image_3 = get_field('image_3');
					$title_3 = get_field('service_title_3');
					$desc_3 = get_field('service_desc_3');
					$image_4 = get_field('image_4');
					$title_4 = get_field('service_title_4');
					$desc_4 = get_field('service_desc_4');
					$size = 'full';

					?>

			 <div class="about_header_wrapper">
			 	<div class="about_header">
					<?php the_content(); ?>
				</div>
			</div>

				<div class="overview">
					<h4><?php echo $overview_title; ?></h4>
					<p><?php echo $overview_text; ?></p>
				</div>

			<div class="services-wrapper">
				<div class="service" id="service-1">
					<div class="service-image">
						<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						} ?>
					</div>
					<div class="service-text">
						<h4><?php echo $title_1; ?></h4>
						<p><?php echo $desc_1; ?></p>
					</div>
				</div>

				<div class="service image-right" id="service-2">
					<div class="service-image">
						<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
						} ?>
					</div>
					<div class="service-text">
						<h4><?php echo $title_2; ?></h4>
						<p><?php echo $desc_2; ?></p>
					</div>
				</div>

				<div class="service" id="service-3">
					<div class="service-image">
						<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
						} ?>
					</div>
					<div class="service-text">
						<h4><?php echo $title_3; ?></h4>
						<p><?php echo $desc_3; ?></p>
					</div>
				</div>

				<div class="service image-right" id="service-4">
					<div class="service-image">
						<?php if($image_4) {
							echo wp_get_attachment_image( $image_4, $size );
						} ?>
					</div>
					<div class="service-text">
						<h4><?php echo $title_4; ?></h4>
						<p><?php echo $desc_4; ?></p>
					</div>
				</div>

			</div>  <!-- .services  -->

			<?php endwhile; // end of the loop. ?>
		</div> <!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
