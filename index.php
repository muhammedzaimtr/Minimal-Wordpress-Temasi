<?php get_header();?>

<!-- ust kısım -->
<div class="header">
  <div class="profil">
      <img src="https://scontent-fra3-1.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/12805861_100629130344258_6263348418377914498_n.jpg?oh=679b2f542a93d5ea62952244c1915c9c&oe=57742897" alt="Muhammed Zaim - Front-End Developer" />
  </div>
  <div class="header-yazi">
      Muhammed Zaim
  </div>
  <div class="header-aciklama">
    Front-End Developer
  </div>
</div>
<!-- orta kısım -->
<div class="content">
  <div class="content-baslik">
    Yazılar
  </div>
  <?php if ( have_posts() ) { ?>
    <?php while (have_posts()) : the_post(); ?>
  <div class="cizgi"></div>
  <div class="baslik">
    <a href="<?php the_permalink() ?>"><?php the_title();?></a>
  </div>
<?php endwhile; ?>
<?php } // endif ?>

  <div class="cizgi"></div>

  <div class="sayfalama">
    <ul>
      <?php sayfalama(); ?>
    </ul>
  </div>

</div>
<?php get_footer();?>
