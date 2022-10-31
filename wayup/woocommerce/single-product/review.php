<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div <?php comment_class('clients__box'); ?> id="li-comment-<?php comment_ID(); ?>">
	<div class="clients__photo">
		<div class="clients__img">
			<!-- <img src="img/callback1.jpg" alt="Анна Свиридова"> -->
			<?php
		/**
		 * The woocommerce_review_before hook
		 *
		 * @hooked woocommerce_review_display_gravatar - 10
		 */
		do_action( 'woocommerce_review_before', $comment );
		?>
		</div>
		<a href="#" class="clients__link">
			<svg  width="14" height="17">
				<use xlink:href="#facebook"/>
			</svg>
		</a>
	</div>
	<div class="clients__say">
		<p class="clients__name"><?php comment_author(); ?> </p>
		<div class="clients__text">

		<?php
		
		/**
		 * The woocommerce_review_meta hook.
		 *
		 * @hooked woocommerce_review_display_meta - 10
		 */
		do_action( 'woocommerce_review_meta', $comment );

		do_action( 'woocommerce_review_before_comment_text', $comment );

	
		?>

			<!-- <p>Новый этап в развитии, умные девайсы теперь можно носить на себе и через них можно управлять телефоном, планшетом, машиной. Apple Watch Series 3 — это не просто дубликатор уведомлений и трекер активности, это полезный, красивый и приятный в использовании гаджет. Они делают жизнь лучше, управление девайсами Apple — проще, а самое главное, позволяют избавиться от патологической привязанности к телефону.</p> -->
			<?php
				/**
			 * The woocommerce_review_comment_text hook
			 *
			 * @hooked woocommerce_review_display_comment_text - 10
			 */
			do_action( 'woocommerce_review_comment_text', $comment );

			do_action( 'woocommerce_review_after_comment_text', $comment );
			?>
		</div>
		<?php 
			/**
			 * The woocommerce_review_before_comment_meta hook.
			 *
			 * @hooked woocommerce_review_display_rating - 10
			 */
			do_action( 'woocommerce_review_before_comment_meta', $comment );

		?>
		<!-- <div class="rate"></div> -->
	</div>
	<div class="add-time">
		<svg width="13" height="13">
			<use xlink:href="#time"/>
		</svg>
		<p class="add-time__date"><?php echo esc_html( get_comment_date( wc_date_format() ) ); ?></p>
	</div>

</div>





	

		
	
