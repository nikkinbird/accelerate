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

			<div class="services">
				<div class="service-1">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>
					<h4><?php echo $title_1; ?></h4>
					<p><?php echo $desc_1; ?></p>
				</div>

			</div>

			<?php endwhile; // end of the loop. ?>
		</div> <!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
