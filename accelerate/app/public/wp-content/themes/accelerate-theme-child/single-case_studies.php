<?php
/**
 * The template for displaying a single case study.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); 
       //the following function comes with ACF - Advaced Custom Fields and takes an argument for the field title
      // (computer-readable version)
        $size = "full";
        $services = get_field('services');
        $client = get_field('client');
        $link = get_field('site_link');
        $image1 = get_field('image_1');
        $image2 = get_field('image_2');
        $image3 = get_field('image_3');     
      ?>
      <article class="case-study">
        <aside class="case-study-sidebar">
          <h2><?php the_title(); ?></h2>
          <h5><?php echo $services; ?></h5>
          <h6>Client: <?php echo $client; ?></h6>
          <?php the_content(); ?>
          <p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
        </aside>

        <div class="case-study-images">
          <?php if($image1) { 
            echo wp_get_attachment_image($image1, $size);
          }
          if($image2) {
            echo wp_get_attachment_image($image2, $size);
           }
          if($image3) { 
             echo wp_get_attachment_image($image3, $size);
          } ?>
        </div>
      </article>

				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
