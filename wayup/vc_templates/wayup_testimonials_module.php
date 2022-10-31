<?php
$args = array(
    'title1' => '',
    'title2' => ''
    
);
$atts = vc_map_get_attributes($this -> getShortcode(), $atts);
extract($atts);
?>
<!-- Clients -->
<section class="clients">
    <div class="wrapper">
        <h2 class="clients__title secondary-title"><span><?php echo $title1;?></span><br><?php echo $title2;?></h2>
        <div class="сlients__slider">

                <?php
                    $testimonial = new WP_Query([
                        'post_type' => 'testimonial',
                        'posts_per_page' => 3,
                    
                    ]);

                if ($testimonial -> have_posts() ) : while ($testimonial -> have_posts() ) : $testimonial -> the_post(); ?>

            <div class="clients__slide">
                <div class="clients__box">
                    <div class="clients__photo">
                        <div class="clients__img">
                            <!-- <img src="img/client1.jpg" alt="Анна Свиридова"> -->
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'fuul');?>
                        </div>
                        <a href="#" class="clients__link">
                            <svg  width="14" height="17">
                                <use xlink:href="#facebook"/>
                            </svg>
                        </a>
                    </div>
                    <div class="clients__say">
                        <p class="clients__name"><?php the_title();?></p>
                        <div class="clients__text">
                         <?php the_content();?>
                        </div>
                    </div>
                    <div class="add-time">
                        <svg width="13" height="13">
                            <use xlink:href="#time"/>
                        </svg>
                        <p class="add-time__date"><?php echo get_the_date();?></p>
                    </div>
                </div>
            </div>

                <?php endwhile;
                wp_reset_postdata();
                else: ?>
                    Записей нет.
                <?php endif; ?>

            <!-- <div class="clients__slide">
                <div class="clients__box">
                    <div class="clients__photo">
                        <div class="clients__img">
                            <img src="img/client2.jpg" alt="Екатерина Цыпелева">
                        </div>
                        <a href="#" class="clients__link">
                            <svg  width="14" height="17">
                                <use xlink:href="#facebook"/>
                            </svg>
                        </a>
                    </div>
                    <div class="clients__say">
                        <p class="clients__name">Екатерина Цыпелева</p>
                        <div class="clients__text">
                            <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
                        </div>
                    </div>
                    <div class="add-time">
                        <svg width="13" height="13">
                            <use xlink:href="#time"/>
                        </svg>
                        <p class="add-time__date">20.05.2018</p>
                    </div>
                </div>
            </div>
            <div class="clients__slide">
                <div class="clients__box">
                    <div class="clients__photo">
                        <div class="clients__img">
                            <img src="img/client3.jpg" alt="Наталья Иванова">
                        </div>
                        <a href="#" class="clients__link">
                            <svg  width="14" height="17">
                                <use xlink:href="#facebook"/>
                            </svg>
                        </a>
                    </div>
                    <div class="clients__say">
                        <p class="clients__name">Наталья Иванова</p>
                        <div class="clients__text">
                            <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
                            <p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации. </p>
                        </div>
                    </div>
                    <div class="add-time">
                        <svg width="13" height="13">
                            <use xlink:href="#time"/>
                        </svg>
                        <p class="add-time__date">20.05.2018</p>
                    </div>
                </div>
            </div>
            <div class="clients__slide">
                <div class="clients__box">
                    <div class="clients__photo">
                        <div class="clients__img">
                            <img src="img/client1.jpg" alt="Анна Свиридова">
                        </div>
                        <a href="#" class="clients__link">
                            <svg  width="14" height="17">
                                <use xlink:href="#facebook"/>
                            </svg>
                        </a>
                    </div>
                    <div class="clients__say">
                        <p class="clients__name">Ольга Генриховна</p>
                        <div class="clients__text">
                            <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
                            <p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; представление наших интересов перед контрагентами; составление различных юридических документов и т.д. Данные услуги были оказаны своевременно и качественно. Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; </p>
                            <p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; </p>
                        </div>
                    </div>
                    <div class="add-time">
                        <svg width="13" height="13">
                            <use xlink:href="#time"/>
                        </svg>
                        <p class="add-time__date">20.05.2018</p>
                    </div>
                </div>
            </div>
            <div class="clients__slide">
                <div class="clients__box">
                    <div class="clients__photo">
                        <div class="clients__img">
                            <img src="img/client4.jpg" alt="Анна Свиридова">
                        </div>
                        <a href="#" class="clients__link">
                            <svg  width="14" height="17">
                                <use xlink:href="#facebook"/>
                            </svg>
                        </a>
                    </div>
                    <div class="clients__say">
                        <p class="clients__name">Илья Меншиков</p>
                        <div class="clients__text">
                            <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
                            <p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; представление наших интересов перед контрагентами; составление различных юридических документов и т.д. Данные услуги были оказаны своевременно и качественно. </p>
                        </div>
                    </div>
                    <div class="add-time">
                        <svg width="13" height="13">
                            <use xlink:href="#time"/>
                        </svg>
                        <p class="add-time__date">20.05.2018</p>
                    </div>
                </div>
            </div> -->



        </div>
    </div>
</section><!-- End clients -->
