<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );?>

<!-- Market -->
<section class="inner shop">
	<div class="shop-top">
	<!-- <div class="shop-top" style="background-img: url(<?php echo get_template_directory_uri();?>'/assets/img/shop-bg.jpg') no-repeat center top/ cover;"> -->
		<div class="wrapper">
			<h1 class="shop-top__title">
				Новая коллекция 2018 <br><span>for real man.</span>
			</h1>
			<a href="#" class="shop-top__btn btn">Купить сейчас</a>
		</div>
	</div>
	<div class="wrapper">
		<div class="shop__heading">
			<div class="shop__btns">
				<div class="shop__btn" id="on-list">
					<svg width="22" height="20">
						<use xlink:href="#list"/>
					</svg>
				</div>
				<div class="shop__btn make-grid" id="on-grid">
					<svg width="20" height="20">
						<use xlink:href="#grid"/>
					</svg>
				</div>
			</div>

				<?php woocommerce_catalog_ordering();?>
			<!-- <div class="sort-menu">
				<span>Сортировать <a href="#" id="parametr">по популярности</a></span>
				<ul>
					<li><a href="#">по цене</a></li>
					<li><a href="#">по популярности</a></li>
					<li><a href="#">по рейтингу</a></li>
					<li><a href="#">новинки</a></li>
				</ul>
			</div> -->
		</div>

			<?php
			/**
			 * Hook: woocommerce_sidebar.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
			?>

		<div class="market">
			<div class="market__heading">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h3 class="woocommerce-products-header__title page-title market__title"><?php woocommerce_page_title(); ?></h3>
			<?php endif; ?>
				<!-- <h3 class="market__title">Аксессуары</h3> -->

			<?php
			/**
			 * Hook: woocommerce_archive_description.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
			?>
				<!-- <p class="market__show">Показано 12 из 137</p> -->
			</div>




				<?php
				/**
				 * Hook: woocommerce_before_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 * @hooked WC_Structured_Data::generate_website_data() - 30
				 */
				do_action( 'woocommerce_before_main_content' );
				if ( woocommerce_product_loop() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			
				woocommerce_product_loop_start();
			
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
			
						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );
			
						wc_get_template_part( 'content', 'product' );
					}
				}
			
				woocommerce_product_loop_end();
			
				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}
				/**
				 * Hook: woocommerce_before_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 * @hooked WC_Structured_Data::generate_website_data() - 30
				 */
				do_action( 'woocommerce_before_main_content' );
				?>
			<!-- <div class="products" id="products">

			
				<div class="products__item sale">
					<span class="discount">-25%</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product1.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Галстук Valentino</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>89</div>
								<div class="price__now"><span class="currency">$</span>67</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product2.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Галстук Versace</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>112</div>
								<div class="price__now"><span class="currency">$</span>112</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item novelty">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product3.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Галстук Calvin Klein</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>112</div>
								<div class="price__now"><span class="currency">$</span>112</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product4.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Галстук-бабочка Dsquared</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>108</div>
								<div class="price__now"><span class="currency">$</span>108</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product5.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Часы Marvin</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>1155</div>
								<div class="price__now"><span class="currency">$</span>1155</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item novelty">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product6.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Часы Rado</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>1760</div>
								<div class="price__now"><span class="currency">$</span>1760</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product7.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Часы Rado</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>1818</div>
								<div class="price__now"><span class="currency">$</span>1818</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item novelty">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product8.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Часы Gucci</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>1144</div>
								<div class="price__now"><span class="currency">$</span>1144</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product9.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Часы Michael Kors</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>880</div>
								<div class="price__now"><span class="currency">$</span>880</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product10.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Запонки с гравировкой</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>31</div>
								<div class="price__now"><span class="currency">$</span>31</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item">
					<span class="discount">-25%</span>
					<span class="new-item">New</span>
					<a href="product-single.html" class="products__img">
						<img src="img/product3.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Ремень Levis </a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>109</div>
								<div class="price__now"><span class="currency">$</span>109</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div>

				<div class="products__item sale">
					<span class="discount">-45%</span>
					<a href="product-single.html" class="products__img">
						<img src="img/cart1.jpg" alt="product">
					</a>
					<div class="products__bottom">
						<div class="products__detail">
							<a href="product-single.html" class="products__name">Apple Watch</a>
							<div class="price">
								<div class="price__old"><span class="currency">$</span>303</div>
								<div class="price__now"><span class="currency">$</span>154</div>
							</div>
							<div class="rate"></div>
						</div>
						<div class="products__btn">
							<form method="get" class="products__form">
								<input type="hidden" name="id">
								<button type="submit" value="cart/add" title="Положить в корзину" class="products__but"></button>
							</form>
						</div>
					</div>
				</div> -->

				<!-- Pagination -->
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
			<!-- </div> -->

		</div>
	</div>
</section>

<?php


?>
<!-- <header class="woocommerce-products-header">
</header> -->

<?php

	
				/**
				 * Hook: woocommerce_after_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );


get_footer( 'shop' );
