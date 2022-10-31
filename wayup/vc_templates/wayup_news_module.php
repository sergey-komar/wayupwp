<?php
$args = array(
    'title1' => '',
    'title2' => ''
    
);
$atts = vc_map_get_attributes($this -> getShortcode(), $atts);
extract($atts);
?>
<!-- News -->
<section class="news">
    <div class="wrapper">
        <h2 class="news__title secondary-title"><span><?php echo $title1;?></span><br><?php echo $title2;?></h2>

        <div class="news__slider">
                <?php
             
                $news = new WP_Query ([
                    'post_type' => 'news',
                    'post_per_page' => 3
                ]);
                if ( $news->have_posts() ) :

                    while ( $news->have_posts() ) :
                        $news->the_post();?>
                <div class="news__slide">
                    <div class="news__item">
                        <div class="add-time">
                            <svg width="13" height="13">
                                <use xlink:href="#time"/>
                            </svg>
                            <p class="add-time__date"><?php echo get_the_date();?></p>
                        </div>
                        <h5 class="news__heading"><?php the_title();?></h5>
                        <p class="news__text"><?php the_excerpt();?></p>
                        <a href="<?php the_permalink();?>" class="news__link link-more">
                            Читать больше
                            <svg width="18" height="20">
                                <use xlink:href="#nav-right"/>
                            </svg>
                        </a>
                    </div>
                    <div class="news__img blue-noise">
                        <!-- <img src="img/photo1.jpg" alt="Изображение"> -->
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full');?>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();   
                else :
                endif;
                ?>



                <!-- <div class="news__slide">
                    <div class="news__item">
                        <div class="add-time">
                            <svg width="13" height="13">
                                <use xlink:href="#time"/>
                            </svg>
                            <p class="add-time__date">20.05.2018</p>
                        </div>
                        <h5 class="news__heading">Что разрешено коллекторам по закону?</h5>
                        <p class="news__text">1 января этого года вступил в силу новый Федеральный закон №230-ФЗ защищающий права физических лиц при возврате задолженности, которая просрочена...</p>
                        <a href="#" class="news__link link-more">
                            Читать больше
                            <svg width="18" height="20">
                                <use xlink:href="#nav-right"/>
                            </svg>
                        </a>
                    </div>
                    <div class="news__img blue-noise">
                        <img src="img/photo2.jpg" alt="Изображение">
                    </div>
                </div>
                <div class="news__slide">
                    <div class="news__item">
                        <div class="add-time">
                            <svg width="13" height="13">
                                <use xlink:href="#time"/>
                            </svg>
                            <p class="add-time__date">20.05.2018</p>
                        </div>
                        <h5 class="news__heading">Как выбрать юридическую фирму</h5>
                        <p class="news__text">Как выбрать юридическую компанию, которая решит ваши проблемы, а не добавит новых? – вопрос очень популярный в нашей стране...</p>
                        <a href="new-single.html" class="news__link link-more">
                            Читать больше
                            <svg width="18" height="20">
                                <use xlink:href="#nav-right"/>
                            </svg>
                        </a>
                    </div>
                    <div class="news__img blue-noise">
                        <img src="img/photo3.jpg" alt="Изображение">
                    </div>
                </div>
                <div class="news__slide">
                    <div class="news__item">
                        <div class="add-time">
                            <svg width="13" height="13">
                                <use xlink:href="#time"/>
                            </svg>
                            <p class="add-time__date">20.05.2018</p>
                        </div>
                        <h5 class="news__heading">Лучшие юридические компании Москвы</h5>
                        <p class="news__text">Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.</p>
                        <a href="new-single.html" class="news__link link-more">
                            Читать больше
                            <svg width="18" height="20">
                                <use xlink:href="#nav-right"/>
                            </svg>
                        </a>
                    </div>
                    <div class="news__img blue-noise">
                        <img src="img/photo1.jpg" alt="Изображение">
                    </div>
                </div> -->



            </div>

            <a href="<?php echo get_post_type_archive_link('news');?>" class="news__btn btn">Все новости</a>
        </div>
</section><!-- End news -->