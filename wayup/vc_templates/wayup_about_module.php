<?php

$args = array(
    'title1' => '',
    'title2' => '',
    'desc' => '',
    'featured_img' => '',
    'author' => '',
    'singature' => '',
    'quote' => '',
    'author_name' => '',
    'author_status' => ''

);
$atts = vc_map_get_attributes($this -> getShortcode(), $atts);
extract($atts);



// Выводим картинку
$featured_img_url = '';
if(is_numeric($featured_img)){
    $featured_img_url = wp_get_attachment_url($featured_img);
}
$autor = '';
if(is_numeric($author)){
    $author_url = wp_get_attachment_url($author);
}
$singature_url = '';
if(is_numeric($singature)){
    $singature_url = wp_get_attachment_url($singature);
}

?>
  <section class="choice">
 <div class="wrapper">
     <div class="choice__block">
         <div class="choice__image">
             <div class="choice__pic blue-noise">
                 <img src="<?php echo $featured_img_url;?>" alt="JC">
             </div>
             <div class="director">
                 <div class="director__img">
                     <img src="<?php echo $author_url;?>" alt="Дмитрий Львович">
                 </div>
                 <div class="director__text">
                     <p class="director__quote"><?php echo $quote;?></p>
                     <div class="director__pers">
                         <span><?php echo $author_name;?></span>
                         Директор компании
                     </div>
                 </div>
                 <div class="director__sign">
                     <img src="<?php echo $singature_url;?>" alt="Подпись">
                 </div>
             </div>
         </div>
         <div class="choice__wrap">
             <h2 class="choice__title secondary-title"><span>Почему мы –</span><br>правильный выбор для вас</h2>
             <div class="choice__descr">
                 <?php echo $desc; ?>
             </div>
         </div>
     </div>
 </div>
</section>