<?php

function sayfalama($pages = '', $range = 7)
{
$showitems = ($range * 2)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{
echo "<div class='wp-pagenavi'>";
echo "<span>".$paged."/".$pages."</span>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>İlk</a>";
if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
}
}
if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Son</a>";
echo "</div>";
}
}

add_theme_support('slidemenu');
register_nav_menus(array(
 'menu' => 'Header Menü',
));

/* Öne Çıkarılmış Görsel Özelliği Ekliyoruz */

if (function_exists('add_theme_support')) {

   add_theme_support( 'post-thumbnails' );
   set_post_thumbnail_size( 580, 330, true ); // Standart Değerler
   add_image_size('resim-kucuk', 250, 175, true); // Küçük Resmimiz
   add_image_size('resim-buyuk', 450, 290, true); // Büyük Resmimiz

/* dilediğimiz kadar boyut ve alan ekleyebiliriz */
/* örnek: add_image_size('ne-isterseniz', 999, 999, true); */


}



?>
