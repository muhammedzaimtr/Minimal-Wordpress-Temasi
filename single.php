<?php get_header();?>
<!-- orta kısım -->
    <div class="content">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="yazi-baslik">
        <a href="#"><?php the_title(''); ?></a>
      </div>
      <div class="cizgi"></div>
      <div class="yazi-detay">
        <span>Tarih: <?php the_time('d F Y'); ?></span>&nbsp;<span>Yazar: <?php the_author(); ?></span>
      </div>
      <div class="cizgi"></div>
      <div class="yazi-icerik">
<p><?php the_content(''); ?></p>
        </div>

      <div class="paylas">
        <ul>
          <li><a class="fa facebook-btn" href="//www.facebook.com/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank"><?php _e( 'Facebook', 'wptouch-pro' ); ?></a></li>
          <li><a class="fa twitter-btn" href="//twitter.com/intent/tweet?source=wptouchpro3&text=<?php echo htmlspecialchars( urlencode( html_entity_decode( get_the_title() . ' - ' ) ) ); ?>&url=<?php echo urlencode( get_permalink() ); ?>" target="_blank"><?php _e( 'Twitter', 'wptouch-pro' ); ?></a></li>
          <li><a class="fa pinterest-btn" href="//pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank"><?php _e( 'Pinterest', 'wptouch-pro' ); ?></a></li>
          <li><a class="fa email-btn" href="mailto:?subject=<?php echo rawurlencode( get_the_title() ); ?>&body=<?php echo rawurlencode( get_permalink() ); ?>"><?php  _e( 'Mail At', 'wptouch-pro' ); ?></a></li>

        </ul>
      </div>
<?php endwhile;?>
    </div>
<?php get_footer();?>
