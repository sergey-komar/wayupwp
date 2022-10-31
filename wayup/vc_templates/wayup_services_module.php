<?php
$args = array(
    'title1' => '',
    'title2' => ''
    
);
$atts = vc_map_get_attributes($this -> getShortcode(), $atts);
extract($atts);
?>
<!-- Services -->
<section class="services">
    <div class="wrapper">
        <div class="services__wrap">
            <h2 class="services__title secondary-title"><span><?php echo $title1;?></span><br><?php echo $title2;?></h2>
            <a href="<?php echo get_post_type_archive_link('service');?>" class="services__btn btn">Все услуги</a>
        </div>
        <ul class="services__list">

        <?php
			 	$services = new WP_Query([
					'post_type' => 'service',
					'posts_per_page' => 3,
				
				 ]);

				 if ($services -> have_posts() ) : while ($services -> have_posts() ) : $services -> the_post(); ?>
					<!-- Вывода постов, функции цикла: the_title() и т.д. -->
					<li class="services__item services__item_stat">
					<h3 class="services__heading"><?php the_title();?></h3>
					<p class="services__descr"><?php the_excerpt();?></p>
					<p class="services__price"><?php echo get_metadata('post', get_the_ID(), 'wayup_service_post', true);?></p>
					<a href="<?php the_permalink();?>" class="services__order btn">Подробнее</a>
					<?php get_metadata('post', get_the_ID(), 'wayup_service_icon', true);?>
					<div class="services__bg services__bg_stat"></div>
					</li>
					<?php endwhile;
					wp_reset_postdata();
					else: ?>
						Записей нет.
					<?php endif; ?>


            <!-- <li class="services__item services__item_stat">
                <h3 class="services__heading">Корпоративная практика, M&A</h3>
                <p class="services__descr">Услуги в области корпоративного управления, рынков капитала, M&A</p>
                <p class="services__price">$350</p>
                <a href="service.html" class="services__order btn">Подробнее</a>
                <div class="services__bg services__bg_stat"></div>
            </li>
            <li class="services__item services__item_idea">
                <h3 class="services__heading">Интеллектуальная собственность</h3>
                <p class="services__descr">Весь спектр услуг в сфере интеллектуальной собственности</p>
                <p class="services__price">$390</p>
                <a href="service.html" class="services__order btn">Подробнее</a>
                <div class="services__bg services__bg_idea"></div>
            </li>
            <li class="services__item services__item_internet">
                <h3 class="services__heading">Интернет-бизнес и цифровая экономика</h3>
                <p class="services__descr">Весь спектр юридических услуг по сопровождению интернет – проектов</p>
                <p class="services__price">$480</p>
                <a href="service.html" class="services__order btn">Подробнее</a>
                <div class="services__bg services__bg_internet"></div>
            </li> -->

        </ul>
    </div>
</section><!-- End services -->