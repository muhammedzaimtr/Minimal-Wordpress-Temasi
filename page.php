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

<?php endwhile;?>
    </div>
<?php get_footer();?>
