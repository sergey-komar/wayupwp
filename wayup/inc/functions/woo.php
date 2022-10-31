<?php
// ПОДКЛЮЧАЕМ СВОЙ WOOCOMMERS
function wayup_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Размеры картинки добавлям div с классом
function wayup_wrapforimg_open(){
    echo '<div class="products__img">';
}
function wayup_wrapforimg_close(){
    echo '</div>';
}

// Рейтинг
function wayup_product_data(){ 
    global $product;
    $rating_count = $product->get_rating_count();
    $average      = $product->get_average_rating();
    ?>


<div class="products__detail">
    <a href="<?php the_permalink();?>" class="products__name"><?php the_title();?></a>
    <div class="price">
        <!-- <div class="price__old"><span class="currency">$</span>89</div>
        <div class="price__now"><span class="currency">$</span>67</div> -->
        <?php echo $product -> get_price_html();?>
    </div>
    <?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
    <!-- <div class="rate"></div> -->
</div>
<?php }


// ВЫВОДИМ ПЕРЕД НАЗВАНИЕМ ТОВАРА ЕГО АРТИКУЛ И В НАЛИЧИИ
function wayup_woo_sku_custom(){ 
    global $product;
    ?>
<div class="product__article">
    Артикул:
    <span class="product__article-value"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span>
</div>
<div class="availability <?php $tovar = $product -> get_availability(); 
    if( $tovar['class'] !== 'out-of-stock'){
        echo 'true';
    }
        ?>">
    <span class="true">В наличии</span>
    <span class="false">Нет в наличии</span>
   
</div>
<?php } 



// ЦЕНА СО СКИДКОЙ НА СТРАНИЦЕ КОРЗИНЫ
function my_custom_show_sale_price_at_cart( $old_display, $cart_item, $cart_item_key ) {

	/** @var WC_Product $product */
	$product = $cart_item['data'];

	if ( $product ) {
		return $product->get_price_html();
	}

	return $old_display;

}
add_filter( 'woocommerce_cart_item_price', 'my_custom_show_sale_price_at_cart', 10, 3 );
// ЦЕНА СО СКИДКОЙ НА СТРАНИЦЕ КОРЗИНЫ





// ЦЕНА У КАРТОЧКИ ОТКРЫТОГО ТОВАРА
function wayup_custom_addtocart_price(){ 
    global $product;
    ?>
	<div class="product__price">
    <?php echo $product -> get_price_html();?>
        <!-- <span class="currency">$</span>
        1299 -->
    </div>
<?php } 

// СОЦИАЛЬНЫЕ ССЫЛКИ
function wayup_custom_share(){ ?>
<div class="share">
    <p class="share__title">
        Поделиться:
    </p>
    <ul class="social">
        <li class="social__item">
            <span>Vk</span>
            <a data-social="vkontakte" class="social__icon social__icon_vk" href="https://www.google.com/search?q=woocommerce+%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F+%D0%BD%D0%B0+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%BC&oq=&aqs=chrome.3.35i39i362l8.1895783806j0j7&sourceid=chrome&ie=UTF-8">
                <svg  width="21" height="18">
                    <use xlink:href="#vk"/>
                </svg>
            </a>
        </li>
        <li class="social__item">
            <span>Fb</span>
            <a data-social="facebook" class="social__icon social__icon_fb" href="https://www.google.com/search?q=woocommerce+%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F+%D0%BD%D0%B0+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%BC&oq=&aqs=chrome.3.35i39i362l8.1895783806j0j7&sourceid=chrome&ie=UTF-8">
                <svg  width="14" height="17">
                    <use xlink:href="#facebook"/>
                </svg>
            </a>
        </li>
        <li class="social__item">
            <span>Tw</span>
            <a data-social="twitter" class="social__icon social__icon_tw" href="https://www.google.com/search?q=woocommerce+%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F+%D0%BD%D0%B0+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%BC&oq=&aqs=chrome.3.35i39i362l8.1895783806j0j7&sourceid=chrome&ie=UTF-8">
                <svg  width="18" height="15">
                    <use xlink:href="#twitter"/>
                </svg>
            </a>
        </li>
        <li class="social__item">
            <a class="social__icon social__icon_inst" href="https://www.google.com/search?q=woocommerce+%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F+%D0%BD%D0%B0+%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%BC&oq=&aqs=chrome.3.35i39i362l8.1895783806j0j7&sourceid=chrome&ie=UTF-8">
                <svg   width="16" height="16">
                    <use xlink:href="#instagram"/>
                </svg>
            </a>
        </li>
    </ul>
</div> 
<?php }






// СЛАЙДЕР
// add_action('after_setup_theme', 'modist_plagin_setup');
// function modist_plagin_setup (){
//     add_theme_support('wc-product-gallery-zoom');
//     add_theme_support('wc-product-gallery-lightbox');
//     add_theme_support('wc-product-gallery-slider');    
// }

// ФОРМА НА СТРАНИЦЕ ОТЗЫВОВ МАГАЗИНА для ТЕЛЕФОНА ОТПРАВЛЯЕТ ТЕЛЕФОН НА ПОЧТУ и ССЫЛКА НА СОЦ СЕТЬ
add_action('comment_post','wayup_save_comment_meta_data');
function wayup_save_comment_meta_data($comment_id){
add_comment_meta($comment_id, 'phone', $POST['phone']);
add_comment_meta($comment_id, 'social', $POST['social']);
}


//ЭТОТ ФИЛЬТР ПЕРЕНОСИТ ПОЛЕ ОТЗЫВА СВЕРХУ, ВНИЗ ПОД ПОЛЯ ТЕЛЕФОН ЭМАЙЛ  ИМЯ И Т.Д
function wayup_move_comment_field_to_bottom($fields){
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter('comment_form_fields', 'wayup_move_comment_field_to_bottom');



add_action( 'after_setup_theme', 'wayup_add_woocommerce_support' );
// ПОДКЛЮЧАЕМ СВОЙ WOOCOMMERS



// УБИРАЕМ СТАРЫЙ САЙДБАР И ЗАМЕНЯЕМ ЕГО ПЕРСОНАЛЬНЫМ
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_sidebar', function(){
    get_sidebar('woocommerce');
});

// Удалили описание
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

// Переносим уведомление выше
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
add_action('woocommerce_archive_description', 'woocommerce_result_count', 10);

// Удаление хлеюных крошек
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Перенос сортировки страницы
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);



// КАРТОЧКА ПРОДУКТА
// Размеры картинки добавлям div с классом
add_action('woocommerce_before_shop_loop_item', 'wayup_wrapforimg_open', 5);
add_action('woocommerce_before_shop_loop_item_title', 'wayup_wrapforimg_close', 20);
// Размеры картинки добавлям div с классом

add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);
remove_action('woocommerce_after_shop_loop_item', ' woocommerce_template_loop_product_link_close', 5);

add_action('woocommerce_shop_loop_item_title', function(){
    echo '<div class="products__bottom">';
}, 5);
add_action('woocommerce_after_shop_loop_item', function(){
    echo '</div>';
}, 15);

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'wayup_product_data', 10);

// УБИРАЕМ РЕЙТИНГ И ЦЕНУ
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);





// ВЫВОДИМ ПЕРЕД НАЗВАНИЕМ ТОВАРА ЕГО АРТИКУЛ И В НАЛИЧИИ ХУКИ ДЛЯ КАРТОЧКИ ОТКРЫТОГО ТОВАРА
add_action('woocommerce_single_product_summary', 'wayup_woo_sku_custom', 4);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 6);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_before_add_to_cart_button', 'wayup_custom_addtocart_price', 5);




// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_share', 'wayup_custom_share', 5);


// УБИРАЕМ ПОХОЖИЕ ТОВАРЫ АПСЕЙЛ И КРОССЕЙЛ
remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products', 20);


