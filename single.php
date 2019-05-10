<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

get_header();
?>
<div class="container">
  <div class="column">
    <?php
    bulmawp_breadcrumbs();
    if( have_posts() ) : while( have_posts() ) : the_post();
    ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="content">
          <p class="is-size-7 <?php if( has_tag() ) : echo 'is-marginless'; endif; ?>"><?php echo __( ' Par ' ); the_author(); echo ' '; the_date( '', '/ ' ); ?> / <a href="<?php the_permalink(); ?>#comments"><?php comments_number( '0 commentaires', '1 commentaires', '% commentaires' ); ?></a></p>
          <?php
          if( has_tag() ) : echo the_tags( '<p class="is-size-7">Tags: ', ', ', '</p>' ); endif;
          the_content();
          ?>
        </div>
        <?php comments_template(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
