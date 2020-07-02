<?php
/**
 * The template for displaying the archive of case studies. 
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary">
		<div class="services-content" role="main">
      <?php while ( have_posts() ) : the_post(); 
      $image1 = get_field("image_1");
      $size = "full"; 
      ?>
        <div class="service-text">
          <h1><?php the_title(); ?></h1>
          <h6><?php echo get_field('services') ?></h6>
          <p><?php the_content(); ?></p>
        </div>
      <div class="service-image">
        <img src="<?php echo wp_get_attachment_image($image1, $size) ?>" />
      </div>
      <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>
