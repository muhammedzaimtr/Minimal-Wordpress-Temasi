<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/FortAwesome/Font-Awesome/master/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" title="no title" charset="utf-8">
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
        <img src="http://upload.muhammedzaim.com/u/389314963.png " alt="Menu" />
      </div>

      <div class="slidemenu">
          <ul>
            <?php wp_nav_menu(array('the_location'=>'Header')); ?>
          </ul>
      </div>
