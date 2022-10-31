<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wayup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<!-- Подключение svg -->
	<div class="svg-placeholder" style="display: none;"></div>
	<script>document.querySelector('.svg-placeholder').innerHTML = SVG_SPRITE;</script>
</head>


<!-- Если есть класс is-home У BODY только на главной странице, на всех остальных нет этого класса, то добавляем этот класс НА ГЛАВНУЮ СТРАНИЦУ -->
<!-- <body <?php if(is_page_template('template-home.php')){
				body_class('is-home');
				}else{
					body_class();
				} ?>> -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>





<?php
global $wayup_option;


//  Делаем разные шапки на разных страницах 
$class_header = '';
$style_for_header = '';
if(is_page_template('template-home.php')){
	$class_header = 'header-home';
	$style_for_header = 'style="background: #fff url(' .  $wayup_option ['header_bg'] ['url'] . ') no-repeat center top/ cover;"';
}else{
	$class_header = 'header-inner';
	$style_for_header = '';
}
?>
<header class="header <?php echo esc_attr($class_header);?>" <?php echo $style_for_header;?>>

<!-- Header -->
<!-- <header class="header header-home" style="background: #fff url(<?php echo  $wayup_option['header_bg']['url'];?>) no-repeat center top/ cover;"> -->










<div class="heading">
<!-- СОЦИАЛЬНЫЕ ИКОНКИ -->
<ul class="social">
		<?php $social_icons = $wayup_option['social_links'];
		foreach ($social_icons as $social => $link){ 
			$label = '';
			$svg = '';
			$class = '';

			if($social == 'VK link'){
				$label = '<span>VK</span>';
				$svg = '<svg  width="21" height="18"><use xlink:href="#vk"/></svg>';
				$class = 'social__icon_vk';
			}else if($social == 'FB link'){
				$label = '<span>FB</span>';
				$svg = '<svg  width="14" height="17">
				<use xlink:href="#facebook"/></svg>';
				$class = 'social__icon_fb';
			}else if($social == 'TW link'){
				$label = '<span>TW</span>';
				$svg = '<svg  width="18" height="15">
				<use xlink:href="#twitter"/></svg>';
				$class = 'social__icon_tw';
			}else if($social == 'Instagram link'){
				$label = '';
				$svg = '<svg   width="16" height="16"><use xlink:href="#instagram"/></svg>';
				$class = 'social__icon_inst';
			}		
			?>
			<li class="social__item">
			<?php echo $label; ?>
			<a class="social__icon <?php echo $class;?>" href="<?php echo $link?>" target="_blank">
				<?php echo $svg; ?>
			</a>
			</li>
		<?php } 
		?>
		<!-- СОЦИАЛЬНЫЕ ИКОНКИ -->

			<!-- <ul class="social">
				<li class="social__item">
					<span>Vk</span>
					<a class="social__icon social__icon_vk" href="#">
						<svg  width="21" height="18">
							<use xlink:href="#vk"/>
						</svg>
					</a>
				</li>
				<li class="social__item">
					<span>Fb</span>
					<a class="social__icon social__icon_fb" href="#">
						<svg  width="14" height="17">
							<use xlink:href="#facebook"/>
						</svg>
					</a>
				</li>
				<li class="social__item">
					<span>Tw</span>
					<a class="social__icon social__icon_tw" href="#">
						<svg  width="18" height="15">
							<use xlink:href="#twitter"/>
						</svg>
					</a>
				</li>
				<li class="social__item">
					<a class="social__icon social__icon_inst" href="#">
						<svg   width="16" height="16">
							<use xlink:href="#instagram"/>
						</svg>
					</a>
				</li>
			</ul> -->
		<!-- СОЦИАЛЬНЫЕ ИКОНКИ -->
</ul>




<div class="heading__block">
		<a href="cart.html" class="heading__bag">
			<svg width="17" height="20">
				<use xlink:href="#bag"/>
			</svg>
		</a>
		<div class="language">
			<ul>
				<li class="lang-item active">
					<a href="#">Ru</a>
				</li>
				<li class="lang-item">
					<a href="#">En</a>
				</li>
			</ul>
		</div>
</div>
<div class="control">
		<a href="#enter" class="control__enter popup-link-1">
			<svg class="control__icon" width="19" height="17">
				<use xlink:href="#login"/>
			</svg>
			Вход
		</a>
		<a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
			<svg class="control__icon" width="16" height="16">
				<use xlink:href="#user"/>
			</svg>
			Личный кабинет
		</a>
		<a href="#reg" class="control__reg noise popup-link-2">Регистрация</a>
	</div>
</div>

<div class="navigation">
	<div class="logo noise">
		<p class="logo__icon"><?php bloginfo( 'name' ); ?></p>
		<p class="logo__desc"><?php bloginfo( 'description' ); ?></p>
	</div>

	<div class="navigation__wrap">
		<a href="#call" class="call popup-link-1">
			<div class="call__icon btn">
				<svg width="22" height="22">
					<use xlink:href="#phone-solid"/>
				</svg>
			</div>
			<div class="call__block">
				<p class="call__text">Заказать звонок</p>
				<p class="call__number"><?php echo  $wayup_option['header_phone'];?></p>
			</div>
		</a>
		
		
		<!-- Main menu -->
		<nav id="nav-wrap" class="menu">
			
			<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
			<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

			<!-- <ul id="nav" class="menu__list">
				<li class="active"><a href="index.html">Главная</a></li>
				<li><a href="about.html">О компании</a></li>
				<li><span><a href="services.html">Услуги</a></span>
					<ul>
						<li><a href="service.html">Корпоративная практика, M&A</a></li>
						<li><a href="service.html">Интеллектуальная собственность</a></li>
						<li><a href="service.html">Интернет-бизнес и цифровая экономика</a></li>
						<li><a href="service.html">Информационные технологии / TMT</a></li>
						<li><a href="service.html">Government Relations</a></li>
						<li><a href="service.html">Коммерческая практика</a></li>
					</ul>
				</li>
				<li><a href="reviews.html">Отзывы</a></li>
				<li><a href="contacts.html#">Контакты</a></li>
				<li><a href="market.html">Магазин</a></li>
			</ul> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-header',
					'menu_id'        => 'nav',
					'container'      => '',
					'menu_class'	 => 'menu__list'
				)
			);
			?>
		</nav><!-- End main menu -->


		<div class="widget widget_search">
			<!-- <form role="search" method="get" id="searchform" action="#">
		
				<input class="text-search" type="search" value="" placeholder="Поиск">
				<input type="submit" class="submit-search" value="" />
		
			</form> -->
			<!-- ФОРМА ПОИСКА -->
			<?php  get_search_form();?>
		</div>
	</div>

</div>






<!-- РАЗНЫЕ ШАПКИ НА РАЗНЫХ СТРАНИЦАХ НА ГЛАВНОЙ ОДНА, НА ВСЕХ ОСТАЛЬНЫХ ДРУГАЯ -->
<?php if(is_page_template('template-home.php')){
?>
<div class="offer">
	<div class="wrapper">
		<div class="offer__slider">
<!-- СЛАЙДЕР  СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР-->
			<?php 
			$sliders = $wayup_option['header_home_slider'];
			foreach($sliders as $slide) {
				?>
			<div class="offer__slide">
				<p class="offer__text"><?php echo $slide['title'];?></p>
				<?php echo $slide['description'];?>
				<a href="<?php echo $slide['url'];?>" class="offer__btn btn popup-link">Бесплатная консультация</a>
				<img class="test"  src="<?php echo $slide ['image'];?>" width="100px" alt="">
				<a href="http://jclegal/calc/" class="offer__btn btn popup-link">Бесплатная консультация</a>
			</div>
			<?php }?>
			<!-- <div class="offer__slide">
				<p class="offer__text">Вы хотите изменить мир.</p>
				<h1 class="offer__title">Мы хотим вам помочь.</h1>
				<p class="offer__descr">Мы современная Юридическая фирма,<br> помогающая перспективным стартапам, фрилансерам и малому бизнесу.</p>
				<a href="contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
			</div>
			<div class="offer__slide">
				<p class="offer__text">Вы хотите изменить мир.</p>
				<h1 class="offer__title">Мы хотим вам помочь.</h1>
				<p class="offer__descr">Юристы JC проведут вас и вашу компанию через многочисленные юридические проблемы, стоящие перед компаниями Москвы сегодня.</p>
				<a href="contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
			</div>
			<div class="offer__slide">
				<p class="offer__text">Вы хотите изменить мир.</p>
				<h1 class="offer__title">Мы хотим вам помочь.</h1>
				<p class="offer__descr">Мы предпочитаем обсуждать проблемы и решения, а не участвовать в теоретических юридических дебатах, которые никогда не заканчиваются.</p>
				<a href="contacts.html#callback" class="offer__btn btn">Бесплатная консультация</a>
			</div> -->
		</div>

		<a class="offer__video popup-with-zoom-anim popup-youtube" href="<?php echo $wayup_option['header_video'];?>" rel="nofollow" >
			<p class="offer__time"><?php echo $wayup_option['header_time'];?></p>
			<div class="offer__play"></div>
			<p class="offer__watch"><?php echo $wayup_option['header_video_title'];?></p>
		</a>
	</div>
</div>	
<?php
}else{?>
<div class="caption">
				<div class="wrapper">
					<h1 class="caption__title"><?php wp_title('');?></h1>
					<!-- <div class="caption__bc">
						<span>
							<a href="index.html">Главная</a>
						</span>
						<span class="sep">/</span>
						<span class="current">Контакты</span>
					</div> -->
					<?php echo wayup_get_breadcrumbs();?>
				</div>
			</div>
			
<?php
}
?>
<!-- РАЗНЫЕ ШАПКИ НА РАЗНЫХ СТРАНИЦАХ НА ГЛАВНОЙ ОДНА, НА ВСЕХ ОСТАЛЬНЫХ ДРУГАЯ -->


</header><!-- End header -->


