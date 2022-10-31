<?php
$args = array(
    'title1' => '',
    'title2' => '',
    'desc' => '',
  
);
$atts = vc_map_get_attributes($this -> getShortcode(), $atts);
extract($atts);
?>
<section class="help">
    <div class="wrapper">
        <div class="help__block">
            <h2 class="help__title secondary-title"><span><?php echo $title1;?></span><?php echo $title2;?> </h2>
            <p class="help__descr"><?php echo $desc;?></p>
            <a href="contacts.html#callback" class="help__btn btn popup-link">Получить консультацию</a>
        </div>
        <ul class="help__list">
            <li class="help__item">
                <div class="help__icon help__icon_rocket"></div>
                <h4 class="help__heading">Стартапам</h4>
                <p class="help__par">Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические&nbsp;услуги, чтобы<br>помочь вам расти</p>
            </li>
            <li class="help__item">
                <div class="help__icon help__icon_monitor"></div>
                <h4 class="help__heading">Фрилансеру</h4>
                <p class="help__par">Начать независимый бизнес проще, чем когда-либо. Неважно подрабатываете вы или работаете самостоятельно, мы можем помочь вам сделать все правильно</p>
            </li>
            <li class="help__item">
                <div class="help__icon help__icon_brain"></div>
                <h4 class="help__heading">Малому бизнесу</h4>
                <p class="help__par">Мы поможем направить ваш бизнес в правильном направлении. Окажем услуги в области договорного, трудового права, недвижимости и многое другое </p>
            </li>
        </ul>
    </div>
</section>