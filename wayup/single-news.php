<?php
get_header();
?>



            <?php
            if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();?>

<section class="single event">
	<div class="event-top" style="background: #fff url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>) no-repeat center top/ cover;">
		<div class="wrapper">
			<div class="event-top__wrap">
				<div class="add-time">
					<svg width="13" height="13">
						<use xlink:href="#time"/>
					</svg>
					<!-- <p class="add-time__date">20.05.2018</p> -->
                    <p class="add-time__date"><?php the_date();?></p>
				</div>
				<div class="rate"></div>
			</div>
			<h1 class="event-top__title">
				<!-- Как вернуть долг, если должник ликвидировался? -->
                <?php the_title();?>
			</h1>


			<ul class="tags-list">
				<!-- <li><a href="#">Судебная практика</a></li>
				<li><a href="#">Социальная сфера</a></li> -->
                    <?php
					$news_categories = wp_get_post_terms(get_the_ID(), 'news-category' );

                    foreach($news_categories as $category){?>
        <li><a href="<?php echo get_term_link($category);?>"><?php echo $category ->name; ?></a></li>
                    <?php } ?>
			</ul>

            
		</div>
	</div>
	<div class="wrapper">
		<div class="event__content">

        <?php the_content();?>
			<div class="event__wrap">
				<div class="share">
					<p class="share__title">
						<svg width="15" height="15">
							<use xlink:href="#link"/>
						</svg>
						Поделиться:
					</p>
					<ul class="social">
						<li class="social__item">
							<span>Vk</span>
							<a data-social="vkontakte" class="social__icon social__icon_vk" href="<?php echo ale_get_share('vk');?>">
								<svg  width="21" height="18">
									<use xlink:href="#vk"/>
								</svg>
							</a>
						</li>
						<li class="social__item">
							<span>Fb</span>
							<a data-social="facebook" class="social__icon social__icon_fb" href="<?php echo ale_get_share('fb');?>">
								<svg  width="14" height="17">
									<use xlink:href="#facebook"/>
								</svg>
							</a>
						</li>
						<li class="social__item">
							<span>Tw</span>
							<a data-social="twitter" class="social__icon social__icon_tw" href="<?php echo ale_get_share('twi');?>">
								<svg  width="18" height="15">
									<use xlink:href="#twitter"/>
								</svg>
							</a>
						</li>
					</ul>
				</div>



                <ul class="event__nav">
                    <li class="prev">
                    <?php
                        $prev_post = get_previous_post();
                        if( ! empty($prev_post) ){
                            ?>
                            <a href="<?php echo $prev_post -> guid; ?>">Предыдущая новость</a>
                            <?php
                        }
                        ?>
                    
                    </li>
                    <li class="next">
                        <?php
                        $next_post = get_next_post();
                        if( ! empty($next_post) ){
                            ?>
                            <a href="<?php echo get_permalink( $next_post ); ?>">Следующая новость</a>
                            <?php
                        }
                        ?>
                    </li>
                       
                </ul>
				<!-- <ul class="event__nav">
					<li class="prev">
						<a href="#">Предыдущая новость</a>
					</li>
					<li class="next">
						<a href="#">Следующая новость</a>
					</li>
				</ul> -->




			</div>
		</div>


        <?php get_sidebar( );?>
		<!-- <aside class="sidebar">
			<div class="widget widget_search">
				<form role="search" method="get" id="searchform1" action="#">
			
					<input class="text-search" type="search" value="" placeholder="Поиск по новостям">
					<input type="submit" class="submit-search" value="" />
			
				</form>
			</div>
			<div class="categories side-nav">
				<h5 class="categories__title">
					<svg  width="19" height="19">
						<use xlink:href="#content-post"/>
					</svg>
					Категории новостей
				</h5>
				<ul>
					<li>
						<a href="#">Налоги и бухучет</a>
						<span>8</span>
					</li>
					<li>
						<a href="#">Судебная практика</a>
						<span>15</span>
					</li>
					<li>
						<a href="#">Социальная сфера</a>
						<span>5</span>
					</li>
					<li>
						<a href="#">Образование</a>
						<span>7</span>
					</li>
					<li>
						<a href="#">Новости в сфере IT</a>
						<span>33</span>
					</li>
					<li>
						<a href="#">Бизнес</a>
						<span>31</span>
					</li>
					<li>
						<a href="#">Проверки</a>
						<span>14</span>
					</li>
				</ul>
			</div>
		
			<div class="banner" style="background: url(img/banner.jpg) no-repeat center top/ cover;">
				<h4 class="banner__title">Юридические консультации для малого бизнеса</h4>
				<p class="banner__text">Не позволяйте юридическим вопросам отвлекать вас от ведения бизнеса</p>
				<a href="#" class="banner__btn btn">Подробнее</a>
			</div>
		
			<div class="subscr">
				<div class="subscr__title">
					<svg  width="19" height="19">
						<use xlink:href="#mail"/>
					</svg>
					Подписаться на рассылку
				</div>
				<form action="#" class="subscr__form log" id="popupSubscribe">
					<div class="log__group">
						<label>Имя</label>
						<input type="text" name="name_mod" class="log__input">
					</div>
					<div class="log__group">
						<label>Email</label>
						<input type="email" name="email" class="log__input">
					</div>
					<div class="log__btn">
						<input id="subscribe" type="submit" data-submit value="Подписаться" class="btn"/>
					</div>
				</form>
			</div>
		</aside> -->
	</div>
</section>
			
            <?php
			endwhile;
		else :
		endif;
		?>
<?php
get_footer();
?>