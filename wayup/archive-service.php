<?php
get_header();
?>



<section class="inner services tabs">
	<div class="wrapper">
		<h2 class="services__title secondary-title"><span><?php echo $wayup_option['servicearchivetitle1'];?></span><br><?php echo $wayup_option['servicearchivetitle2'];?></h2>
		<div class="tabs__wrap">

			<p class="tabs__descr"><?php echo $wayup_option['servicearchivedesc'];?></p>
			<!-- Cases titles -->
			<ul class="tabs__caption">
			<?php
					$services_types = get_terms( [
						'taxonomy' => 'service-type',
						'hide_empty' => false,
					] );

					$i = 0;
					$active = '';
					// АКТИВНЫЙ ТАБ СТАНОВИТСЯ СИНИМ ЦВЕТОМ
					foreach($services_types as $type){
						if($i == 0){
							$active = 'active';
						}else{
							$active = '';
						}
						echo'<li class="'.$active.'">'. $type->name .'</li>';
						$i++;
					}
				?>
				<!-- <li class="active">Стартапы</li>
				<li>Фриланс</li>
				<li>Малый бизнес</li> -->
			</ul>
		</div>



		<?php
		$j = 0;
		$current = '';
		 foreach($services_types as $category){
			 if($j == 0){
				 $current = 'active';
				} 
			 else{
				$current = '';
			 }
			 ?>
			<div class="tabs__content  <?php echo $current;?>">
			<ul class="services__list">
			 <?php
			 	$services = new WP_Query([
					'post_type' => 'service',
					'posts_per_page' => -1,
					'tax_query' => [
						[
							'taxonomy' => 'service-type',
							'field' => 'slug',
							'terms' => $category->slug
						]
					
					]
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
			 
			</ul>
		</div>	
		<?php 
			$j++;
			} ?>
		
		
		<!-- <div class="tabs__content active">
			<ul class="services__list">
				<li class="services__item services__item_stat">
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
				</li>
				<li class="services__item services__item_info">
					<h3 class="services__heading">Информационные технологии / ТМТ</h3>
					<p class="services__descr">Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы</p>
					<p class="services__price">$525</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_info"></div>
				</li>
				<li class="services__item services__item_busy">
					<h3 class="services__heading">Government <br>Relations</h3>
					<p class="services__descr">Решение вопросов, связанных с регулированием бизнеса</p>
					<p class="services__price">$345</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_busy"></div>
				</li>
				<li class="services__item services__item_target">
					<h3 class="services__heading">Коммерческая практика</h3>
					<p class="services__descr">Услуги по комплексному юридическому сопровождению бизнеса</p>
					<p class="services__price">$410</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_target"></div>
				</li>
			</ul>
		</div>

		<div class="tabs__content">
			<ul class="services__list">
				<li class="services__item services__item_stat">
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
				</li>
				<li class="services__item services__item_info">
					<h3 class="services__heading">Информационные технологии / ТМТ</h3>
					<p class="services__descr">Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы</p>
					<p class="services__price">$525</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_info"></div>
				</li>
				<li class="services__item services__item_busy">
					<h3 class="services__heading">Government <br>Relations</h3>
					<p class="services__descr">Решение вопросов, связанных с регулированием бизнеса</p>
					<p class="services__price">$345</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_busy"></div>
				</li>
				<li class="services__item services__item_target">
					<h3 class="services__heading">Коммерческая практика</h3>
					<p class="services__descr">Услуги по комплексному юридическому сопровождению бизнеса</p>
					<p class="services__price">$410</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_target"></div>
				</li>
			</ul>
		</div>

		<div class="tabs__content">
			<ul class="services__list">
				<li class="services__item services__item_stat">
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
				</li>
				<li class="services__item services__item_info">
					<h3 class="services__heading">Информационные технологии / ТМТ</h3>
					<p class="services__descr">Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы</p>
					<p class="services__price">$525</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_info"></div>
				</li>
				<li class="services__item services__item_busy">
					<h3 class="services__heading">Government <br>Relations</h3>
					<p class="services__descr">Решение вопросов, связанных с регулированием бизнеса</p>
					<p class="services__price">$345</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_busy"></div>
				</li>
				<li class="services__item services__item_target">
					<h3 class="services__heading">Коммерческая практика</h3>
					<p class="services__descr">Услуги по комплексному юридическому сопровождению бизнеса</p>
					<p class="services__price">$410</p>
					<a href="service.html" class="services__order btn">Подробнее</a>
					<div class="services__bg services__bg_target"></div>
				</li>
			</ul>
		</div> -->
	</div>

</section><!-- End services -->

	
<?php
get_footer();
?>