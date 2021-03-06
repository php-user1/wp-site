<?php
/*
  @package wp-site

  Video Post Format
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sunset-format-video' ); ?>>

  <header class="entry-header text-center">
    <div class="embed-responsive embed-responsive-21by9">
      <?php echo sunset_get_embedded_media( array( 'video', 'iframe' ) ) ?>
    </div>
    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    <div class="entry-meta">
      <?php echo sunset_posted_meta(); ?>
    </div>
  </header>

  <div class="entry-content">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )) ?>

      <a href="<?php the_permalink(); ?>" class="standard-featured-link">
        <div class="standard-featured" style="background-image: url(<?php echo $featured_image; ?>);"></div>
      </a>
    <?php endif; ?>
    <div class="entry-excerpt text-center">
      <?php the_excerpt(); ?>
    </div>
    <div class="button-container text-center">
      <a href="<?php the_permalink(); ?>" class="btn-sunset"><?php _e( 'Read More' ); ?></a>
    </div>
  </div><!-- .entry-content -->
  
  <footer class="entry-footer">
    <?php echo sunset_posted_footer(); ?>
  </footer>

</article>
