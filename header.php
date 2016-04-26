<!DOCTYPE html>
<html>
  <head>
<meta name="google-site-verification" content="Af3O7BIUKzLl1Jas0888D2JnYWahpR9JtPBanJLFFGE" />
    <meta charset="utf-8">
<meta name="google-site-verification" content="Af3O7BIUKzLl1Jas0888D2JnYWahpR9JtPBanJLFFGE" />
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" title="no title" charset="utf-8">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,300'>
    <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/zeropage.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-2.2.3.min.js"></script>
    <script type="text/javascript">
    $(function(){
  		var a = 0;
  		$('.menu').click(function(){
  			if ( a == 0 ){
  				$(".slidemenu").css("display", "none");
  				a++;
  			} else {
  				$(".slidemenu").css("display", "block");
  				a = 0;
  			}
  			$(this).next('.slidemenu').slideToggle(500);
  		});
  	});

	</script>
  <?php wp_head(); ?>
  </head>
  <body>
    <!-- MENU kısım -->
      <div class="menu">
        <img src="http://i.hizliresim.com/o3JR3o.png" alt="Menu" />
      </div>

      <div class="slidemenu">
          <ul>
            <?php wp_nav_menu(array('the_location'=>'Header')); ?>
          </ul>
      </div>


  <div class='control' tabindex='1'>
<div class='btn'></div>
<i class='icon-search ion-search'></i>
</div>

<i class='icon-close ion-ios-close-empty'></i>
<form method="get" id="searchform" class='form' action="<?php bloginfo('home'); ?>/">
            <input class="aramakutusu" type="text" size="put_a_size_here" name="s"
             id="s" value="Ara..." onfocus="if(this.value==this.defaultValue)this.value='';"
             onblur="if(this.value=='')this.value=this.defaultValue;"/>
</form>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
