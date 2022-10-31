   <?php
$args = array(
    'title11' => '',
    'title22' => '',
    'descs' => ''

);
$atts = vc_map_get_attributes($this -> getShortcode(), $atts);
extract($atts);
?>  
<section class="cases tabs">
    <div class="wrapper">
        <h2 class="cases__title secondary-title"><span><?php echo $title11?></span><br><?php echo $title22;?></h2>
        <div class="tabs__wrap">

            <p class="tabs__descr"><?php echo $descs;?></p>
           
            <ul class="tabs__caption">
            <?php
					$feature_types = get_terms( [
						'taxonomy' => 'feature-type',
						'hide_empty' => false,
					] );

					$i = 0;
					$active = '';
					
					foreach($feature_types as $type){
						if($i == 0){
							$active = 'active';
						}else{
							$active = '';
						}
						echo'<li class="'.$active.'">'. $type->name .'</li>';
						$i++;
					}
				?>
               
            </ul>

        </div>

                    
                    
            <?php
                $j = 0;
                $current = '';
                foreach($feature_types as $category){
                    if($j == 0){
                        $current = 'active';
                        } 
                    else{
                        $current = '';
                    }
            ?>
        <div class="tabs__content   <?php echo $current;?>">
            <?php
            $feature = new WP_Query([
                'post_type' => 'feature',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'feature-type',
                        'field' => 'slug',
                        'terms' => $category->slug
                    ]
                
                ]
                ]);

                if ($feature -> have_posts() ) : while ($feature -> have_posts() ) : $feature -> the_post(); ?>
            <div class="cases__item">
                <div class="cases__block">
                    <h3 class="cases__heading"><?php the_title();?></h3>
                    <a href="<?php the_permalink();?>" class="cases__link link-more">
                        Читать больше
                        <svg width="18" height="20">
                            <use xlink:href="#nav-right"/>
                        </svg>
                    </a>
                </div>
                <div class="cases__img">
                    <!-- <img src="img/case1.jpg" alt="Изображение"> -->
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'fuul');?>
                </div>
            </div>
                <?php endwhile;
                wp_reset_postdata();
                else: ?>
                    Записей нет.
                <?php endif; ?>

            
        </div>   
            <?php 
			$j++;
			} ?>
     
<!-- ВЫВОДИМ ССЫЛКУ НА АРХИВНУЮ СТРАНИЦУ КЕЙСОВ -->
        <a href="<?php echo get_post_type_archive_link('feature');?>" class="cases__more link-more">
            Показать больше кейсов
            <svg width="18" height="20">
                <use xlink:href="#nav-right"/>
            </svg>
        </a>

    </div>

</section>