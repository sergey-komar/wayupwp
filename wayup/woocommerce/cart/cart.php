<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents cart__content">
	<div class="cart__heading">
		<p class="cart__name">Товар</p>
		<div class="cart__wrap">
			<p class="cart__name">Цена</p>
			<p class="cart__name">Количество</p>
			<p class="cart__name">Итого</p>
		</div>
	</div>

	<?php do_action( 'woocommerce_before_cart_contents' ); ?>

	<?php
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
		$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
			?>
			<div class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?> cart__row">

			<div class="cart__row">


			<!-- КАРТИНКА  КАРТИНКА  КАРТИНКА  КАРТИНКА-->
				<div class="cart__block cart__block_first">
					<?php
					$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

					if ( ! $product_permalink ) {
						echo $thumbnail; // PHPCS: XSS ok.
					} else {
						printf( '<a href="%s" class="cart__image">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
					}
					?>
					<!-- <a href="#" class="cart__image">
						<img src="img/cart1.jpg" alt="">
					</a> -->


					<!-- ЗАГОЛОВОК ЗАГОЛОВОК ЗАГОЛОВОК ЗАГОЛОВОК ЗАГОЛОВОК-->
					<div class="product-name cart__desc sale">
				
					<?php

					do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="cart__product">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</div>

						<!-- <div class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>"> -->
							<!-- <?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
						?> -->
						<!-- <span class="discount">-45%</span>
						<div class="rate"></div> -->
						<!-- <a href="#" class="cart__product">Apple Watch Series 2 42mm Gold Aluminum Case with Toasted Coffe/Caramel Woven Nylon (MNPP2)</a> -->
					<!-- </div> -->
				</div>
				<div class="cart__block cart__block_second">



				<!-- ЦЕНА ЦЕНА ЦЕНА ЦЕНА-->
					<div class="product-price price">
						<!-- <div class="price__old"><span class="currency">$</span>303</div>
						<div class="price__now"><span class="currency">$</span>154</div> -->
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
						?>
					</div>


					
					<div class="product-quantity">
						<!-- <span class="minus" title="Не, лучше поменьше">-</span>
						<input type="text" step="1" min="1" name="quantity" value="1" size="4" title="Сколько вешать в граммах" pattern="[0-9]*"/>
						<span class="plus" title="Да-да, побольше!">+</span> -->
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
					</div>


						<!-- ОБЩАЯ ЦЕНА ОБЩАЯ ЦЕНА ОБЩАЯ ЦЕНА ОБЩАЯ ЦЕНА-->
					<!-- <div class="cart__cost"><span class="currency">$</span>154</div> -->
					<div class="product-subtotal cart__cost">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
					</div>
				
					


<!-- УДАЛЕНИЕ ТОВАРА ИЗ КОРЗИНЫ  УДАЛЕНИЕ ТОВАРА ИЗ КОРЗИНЫ УДАЛЕНИЕ ТОВАРА ИЗ КОРЗИНЫ-->
					<div class="product-remove cart__action">
					<?php
						echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'woocommerce_cart_item_remove_link',
							sprintf(
								'<a href="%s" class="remove cart__del" aria-label="%s" data-product_id="%s" data-product_sku="%s">✖</a>',
								esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
								esc_html__( 'Remove this item', 'woocommerce' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							),
							$cart_item_key
						);
					?>
					</div>


					
							<!-- <?php
						echo apply_filters( 
							'woocommerce_cart_item_remove_link',
							sprintf(
								'<div class="cart__action"><a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><button class="cart__del" type="submit" value="cart/remove">✖</button></a></div>',
								esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
								esc_html__( 'Remove this item', 'woocommerce' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							),
							$cart_item_key
						);
						?>  -->
					
				</div>
			</div>

<?php /*
						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>*/?>
					</div>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<div class="cart__result">
					<div class="promo">
						<!-- <input type="text" class="promo__input log__input" id="promo" placeholder="Код купона">
						<button class="btn promo__btn">
							Применить купон
						</button> -->
						<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<!-- <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label>  -->
							<input type="text" name="coupon_code" class="input-text promo__input log__input" id="coupon_code" value="" placeholder="Код купона" /> <button type="submit" class="button btn_woo promo__btn" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_actions' ); ?>

							<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
						<?php } ?>
					</div>
					<div class="result">
						<div class="result__title">Итого</div>
						<div class="result__row">
							<div class="result__name">Всего</div>
							<div>382<span class="currency">$</span></div>
						</div>
						<div class="result__row">
							<div class="result__name">Общий итог</div>
							<div>382<span class="currency">$</span></div>
						</div>
						<a href="order-regist.html" class="result__btn btn">Оформить заказ</a>
					</div>
				</div>
</div>







	<?php do_action( 'woocommerce_before_cart_table' ); ?> 

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
		
			<tr>
				<td colspan="6" class="actions">

					<!-- <?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?> -->

					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
 </form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
