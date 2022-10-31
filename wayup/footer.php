<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wayup
 */
global $wayup_option;
?>
<!-- Footer -->
<footer class="footer">
	<div class="wrapper">
		<div class="footer__block">
			<a href="index.html" class="logo noise">
				<p class="logo__icon">JC</p>
				<p class="logo__desc">legal Advisory Services</p>
			</a>
			<ul class="social">
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
						<svg width="16" height="16">
							<use xlink:href="#instagram"/>
						</svg>
					</a>
				</li>
			</ul>
			<p class="footer__special">Разработано специально для  WAYUP</p>
		</div>
		<nav class="guide">
			<p class="guide__title">Карта сайта</p>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-footer-1',
						'menu_id'        => 'footer',
						'container'      => '',
						
					)
					);
			?>
			<!-- <ul>
				<li class="active"><a href="#">Главная</a></li>
				<li><a href="index.html">О компании</a></li>
				<li><a href="cases.html">Кейсы</a></li>
				<li><a href="reviews.html">Отзывы</a></li>
				<li><a href="news.html">Новости</a></li>
			</ul> -->
		</nav>
		<div class="serv">
			<p class="serv__title">Услуги</p>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-footer-2',
						'menu_id'        => 'footer',
						'container'      => '',
						
					)
					);
			?>
			<!-- <ul>
				<li><a href="service.html">Корпоративная практика, M&A</a></li>
				<li><a href="service.html">Информационные технологии / TMT</a></li>
				<li><a href="service.html">Интеллектуальная собственность</a></li>
				<li><a href="service.html">Government <br>Relations</a></li>
				<li><a href="service.html">Интернет-бизнес и цифровая экономика</a></li>
				<li><a href="#">Коммерческая практика</a></li>
			</ul> -->
		</div>
		<div class="contact">
			<p class="contact__title">Контакты</p>
			<ul class="contact__list">
				<li class="contact__item">
					<svg width="20" height="25">
						<use xlink:href="#pin"/>
					</svg>
					<?php echo  $wayup_option['header_address'];?>
					<!-- <p class="contact__text contact__text_address">г. Москва, ул. Бутырская, 62
		Z-Plaza, 5-й этаж</p> -->
				</li>
				<li class="contact__item">
					<svg width="21" height="21">
						<use xlink:href="#phone"/>
					</svg>
					<div class="contact__phones">
						<?php foreach( $wayup_option['footer_phone'] as $phone){?>
							<a href="#" class="contact__text contact__text_phone"><?php echo $phone;?></a>
							<?php }
							?>
						<!-- <a href="#" class="contact__text contact__text_phone">+ 7 (495) 577-18-11</a>
						<a href="#" class="contact__text contact__text_phone">+ 7 (495) 567-28-15</a> -->
					</div>
				</li>
				<li class="contact__item">
					<svg width="25" height="19">
						<use xlink:href="#mail"/>
					</svg>
					<?php echo  $wayup_option['header_email'];?>
					<!-- <p class="contact__text contact__text_mail">JClegal@gmail.com</p> -->
				</li>
			</ul>
		</div>
		<div class="subscribe">
			<p class="subscribe__title">Подписаться на рассылку новостей</p>
			<form action="#" class="subscribe__form" id="popupSubscribe">
				<input type="text" name="email" class="subscribe__input" placeholder="Ваш email">
				<button class="subscribe__btn btn" data-submit>Подписаться</button>
			</form>
			<div class="control">
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
				<div class="control__wrap">
					<a  href="#enter" class="control__enter popup-link-1">
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
		</div>
		<p class="footer__copy">©2007-2018 Все права защищены</p>
	</div>
</footer><!-- End footer -->

	
<!-- МОДАЛЬНОЕ ОКНО НА СТРАНИЦЕ ТОВАРА -->
<!-- ДЕЛАЕМ ПРОВЕРКУ, ЕСЛИ ЭТО СТРАНИЦА ТОВАРА, ТО ВЫВОДИМ МОДАЛЬНОЕ ОКНО -->

<?php if(is_singular('product')){ ?>
	<!------------------ One click order ----------------------->
	<?php 	global $product;?>
	<div id="one-click" class="click mfp-hide">
			<div action="#" id="popupOrder" class="click__form log order-form">
				<div class="click__half">
					<p class="click__head">Купить в один клик</p>
					<p class="click__text">Оставьте свои контакнтые данные и мы свяжемся с вами в ближайшее время для уточнения заказа</p>
					<div class="log__group">
						<label>Имя</label>
						<input type="text" name="name" class="log__input">
					</div>
					<div class="log__group">
						<label>Телефон</label>
						<input type="tel" name="tel" class="log__input">
					</div>
					<div class="log__btn">
						<input id="ordered" type="submit" data-submit value="Отправить" class="btn"/>
					</div>
				</div>
				<div class="click__half">
					<p class="click__info">Информация о заказе</p>
					<div class="result">
						<div class="result__block">
							<a href="<?php the_permalink();?>" class="result__image">
								<!-- <img src="img/view1.jpg" alt="Товар"> -->
								<?php echo  get_the_post_thumbnail(get_the_ID(), 'thumbnail')?>
							</a>
							<div class="result__desc">
								<a href="<?php the_permalink();?>" class="result__title"><?php the_title();?></a>
								<div class="result__price">
									<!-- <span class="currency">$</span>
									1299 -->
									<?php echo $product -> get_price_html();?>
								</div>


								<!-- ДОБАВЛЕНИЕ + ИЛИ - В МОДАЛЬНОМ ОКНЕ НА СТРАНИЦЕ ТОВАРА -->
								<form class=" product__form" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
								<?php
								do_action( 'woocommerce_before_add_to_cart_quantity' );
								woocommerce_quantity_input(
									array(
										'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
										'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
										'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
									)
								);

								do_action( 'woocommerce_after_add_to_cart_quantity' );
								?>
								<!-- <div class="quantity">
									<span class="minus">-</span>
									<input type="text" step="1" min="1" name="quantity" value="1" size="4" pattern="[0-9]*"/>
									<span class="plus">+</span>
								</div> -->
								<div class="result__cost">
									<!-- <p>Итого:</p> $<span>1299</span> -->
									<?php echo $product -> get_price_html();?>
								</div>
								<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
								<a href="<?php the_permalink();?>" class="click__link link-more">
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
									Перейти в корзину
								</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Order -->
		<div id="taken" class="sub mfp-hide">
			<p class="sub__thank">Спасибо!</p>
			<p class="sub__text">Ваша заявка принята. Наши специалисты свяжутся с вами в ближайшее время.</p>
		</div>
<!-- End modal -->
<?php	
}?>
<?php wp_footer(); ?>

</body>
</html>
