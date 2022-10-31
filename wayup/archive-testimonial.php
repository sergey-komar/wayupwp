<?php
get_header();
global $wayup_option;
?>

<section class="inner clients">
    <div class="wrapper">
        <h2 class="clients__title secondary-title"><span><?php echo $wayup_option['testilabel1'];?></span><br><?php echo $wayup_option['testilabel2'];?></h2>
      
            <?php
          
            if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();?>

          <div class="clients__box">
                <div class="clients__photo">
                    <div class="clients__img">
                     
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'testimonial-thumb');?>
                    </div>
                    <?php $fb = get_metadata('post', get_the_ID(),'wayup_social_link', true);?>
                    <a href="<?php echo $fb;?>" class="clients__link" target="_blank">
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
                    <?php $date = get_metadata('post', get_the_ID(),'wayup_testy_date', true);?>
                    <p class="add-time__date"><?php echo $date;?></p>
                </div>
        </div>
            <?php
                endwhile;
            else :
            echo "<div> Нет озывов</div>"; 
            endif;
            ?>  
          

        <!-- <div class="clients__box">
            <div class="clients__photo">
                <div class="clients__img">
                    <img src="img/callback2.jpg" alt="Екатерина Еременко">
                </div>
                <a href="#" class="clients__link">
                    <svg  width="14" height="17">
                        <use xlink:href="#facebook"/>
                    </svg>
                </a>
            </div>
            <div class="clients__say">
                <p class="clients__name">Екатерина Еременко</p>
                <div class="clients__text">
                    <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. Хотелось бы оставить свой отзыв о Юридической компании JC. Очень меня выручили, спасибо им большое за помощь. Это мой не первый опыт сотрудничества с юридическими фирмами, и везде присутствовали недостатки. К счастью, в этой компании не было никаких проблем. Все очень быстро и главное uрамотно сделали. Огромный плюс - быстрая запись на консультацию и подготовка нужных</p>
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
        <div class="clients__box">
            <div class="clients__photo">
                <div class="clients__img">
                    <img src="img/callback3.jpg" alt="Алла Анохина">
                </div>
                <a href="#" class="clients__link">
                    <svg  width="14" height="17">
                        <use xlink:href="#facebook"/>
                    </svg>
                </a>
            </div>
            <div class="clients__say">
                <p class="clients__name">Алла Анохина</p>
                <div class="clients__text">
                    <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. Хотелось бы оставить свой отзыв о Юридической компании JC. Очень меня выручили, спасибо им большое за помощь. Это мой не первый опыт сотрудничества с юридическими фирмами, и везде присутствовали недостатки. К счастью, в этой компании не было никаких проблем. Все очень быстро и главное uрамотно сделали. Огромный плюс - быстрая запись на консультацию и подготовка нужных</p>
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
        <div class="clients__box">
            <div class="clients__photo">
                <div class="clients__img">
                    <img src="img/callback4.jpg" alt="Юрий Богдан">
                </div>
                <a href="#" class="clients__link">
                    <svg  width="14" height="17">
                        <use xlink:href="#facebook"/>
                    </svg>
                </a>
            </div>
            <div class="clients__say">
                <p class="clients__name">Юрий Богдан</p>
                <div class="clients__text">
                    <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. Хотелось бы оставить свой отзыв о Юридической компании JC. Очень меня выручили, спасибо им большое за помощь. Это мой не первый опыт сотрудничества с юридическими фирмами, и везде присутствовали недостатки. К счастью, в этой компании не было никаких проблем. Все очень быстро и главное uрамотно сделали. Огромный плюс - быстрая запись на консультацию и подготовка нужных</p>
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
        <div class="clients__box">
            <div class="clients__photo">
                <div class="clients__img">
                    <img src="img/callback5.jpg" alt="Мария Иванова">
                </div>
                <a href="#" class="clients__link">
                    <svg  width="14" height="17">
                        <use xlink:href="#facebook"/>
                    </svg>
                </a>
            </div>
            <div class="clients__say">
                <p class="clients__name">Мария Иванова</p>
                <div class="clients__text">
                    <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. Хотелось бы оставить свой отзыв о Юридической компании JC. Очень меня выручили, спасибо им большое за помощь. Это мой не первый опыт сотрудничества с юридическими фирмами, и везде присутствовали недостатки. К счастью, в этой компании не было никаких проблем. Все очень быстро и главное uрамотно сделали. Огромный плюс - быстрая запись на консультацию и подготовка нужных</p>
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
        <div class="clients__box">
            <div class="clients__photo">
                <div class="clients__img">
                    <img src="img/callback6.jpg" alt="Дмитрий Борсук">
                </div>
                <a href="#" class="clients__link">
                    <svg  width="14" height="17">
                        <use xlink:href="#facebook"/>
                    </svg>
                </a>
            </div>
            <div class="clients__say">
                <p class="clients__name">Дмитрий Борсук</p>
                <div class="clients__text">
                    <p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. Хотелось бы оставить свой отзыв о Юридической компании JC. Очень меня выручили, спасибо им большое за помощь. Это мой не первый опыт сотрудничества с юридическими фирмами, и везде присутствовали недостатки. К счастью, в этой компании не было никаких проблем. Все очень быстро и главное uрамотно сделали. Огромный плюс - быстрая запись на консультацию и подготовка нужных</p>
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
 -->
 
            <?php the_posts_pagination([
                    'prev_text'    => __(''),
                    'next_text'    => __(''),
                    'before_page_number' => '',
	                'after_page_number'  => ''
                ]);?>

        <!-- <nav class="pagination">
            <div class="nav-links">
                <a href="#" class="prev page-numbers"></a>
                <a href="#" class=" page-numbers">1</a>
                <span href="#" class="current page-numbers">2</span>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="page-numbers">5</a>
                <span class="page-numbers page-break">...</span>
                <a href="#" class=" page-numbers">7</a>
                <a href="#" class="next page-numbers"></a>
            </div>
        </nav> -->


                <!-- ВЫВОДИМ ФОРМУ  -->
        <?php echo do_shortcode($wayup_option['testimonial_form_shortcode']);?>
        <!-- <div class="clients__form-block">
            <form action="#" class="log clients__form review-form" id="popupMessage">
                <p class="log__title">Оставьте ваш отзыв</p>
                <div class="log__wrap">
                    <div class="log__group">
                        <label>Имя</label>
                        <input type="text" name="name" class="log__input">
                    </div>
                    <div class="log__group">
                        <label>Email</label>
                        <input type="email" name="email" class="log__input">
                    </div>
                    <div class="log__group">
                        <label>Телефон</label>
                        <input type="tel" name="tel" class="log__input">
                    </div>
                    <div class="log__group log__group_socials">
                        <label>Ссылка на соцсеть</label>
                        <input type="text" name="social" class="log__input">
                    </div>
                    <div class="log__group log__group_textarea">
                        <label>Ваш отзыв</label>
                        <textarea type="text" name="message" class="log__input"></textarea>
                    </div>
                    <p class="log__line"><span>*</span>Поля обязательные для заполнения</p>
                    <div class="log__btn">
                        <input id="send" type="submit" data-submit value="Отправить" class="btn"/>
                    </div>
                </div>
            </form>
        </div> -->

        
    </div>
</section>




<?php
get_footer();
?>