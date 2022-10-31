<?php
/**
 * Template Name: Страница корзины и оформление заказа
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wayup
 */

get_header();
?>
<section class="single cart">
    <div class="wrapper">
    <?php
		while ( have_posts() ) :
			the_post();

            the_content();
		endwhile; // End of the loop.
		?>
    </div>
</section>

	

<?php
get_footer();
