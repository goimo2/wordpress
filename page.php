<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

get_header();
?>
<div class="container blog_space">
  <div class="columns is-multiline is-centered">
  
    <?php
    bulmawp_breadcrumbs();
    $args = array(
      'post_type'         => 'post',
      'posts_per_page'    => 10
  );
  $the_query = new WP_Query( $args );
  
  // The Loop
  if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
          $the_query->the_post();
          
    ?>
    <div class="column is-narrow">
<div class="box size_blog">
    <?php get_template_part('template-parts/post/content', 'post-and-formation'); ?>     
      <!--<div class="content">
        <?php the_content(); ?>
      </div>-->
      </div>
      </div>
      <?php
      //comments_template();
  }
}
  /* Restore original Post Data */
  wp_reset_query();
    ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
