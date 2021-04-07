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
					$overview_text = get_field('overview_text'); ?>

			 <div class="about_header_wrapper">
			 	<div class="about_header">
					<?php the_content(); ?>
				</div>
			</div>

				<div class="overview">
					<h4><?php echo $overview_title; ?></h4>
					<p><?php echo $overview_text; ?></p>
				</div>

			<?php endwhile; // end of the loop. ?>
		</div> <!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
