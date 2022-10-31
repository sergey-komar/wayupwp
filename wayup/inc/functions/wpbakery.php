<?php
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_About_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_about_module',
        'name' => __( 'О компании', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title1',
                'value' => 'По чему мы?',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title2',
                'value' => 'ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Описание', 'wayup' ),
                'param_name' => 'desc',
                'value' => '',
                'description' => __( 'Введите описание', 'wayup' ),
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Картинка модуля', 'wayup' ),
                'param_name' => 'featured_img',
                'value' => '',
                'description' => __( 'Загрузите картинку', 'wayup' ),
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Фото автора', 'wayup' ),
                'param_name' => 'author',
                'value' => '',
                'description' => __( 'Загрузите фото', 'wayup' ),
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Фото подписи', 'wayup' ),
                'param_name' => 'singature',
                'value' => '',
                'description' => __( 'Загрузите фото', 'wayup' ),
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Цитата', 'wayup' ),
                'param_name' => 'quote',
                'value' => 'Мы здесь, чтобы помочь вам построить и поддержать свою мечту.',
                'description' => __( 'Введите описание', 'wayup' ),
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Имя автора', 'wayup' ),
                'param_name' => 'author_name',
                'value' => 'Дмитрий Львович',
                'description' => __( 'Введите имя', 'wayup' ),
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Должность автора', 'wayup' ),
                'param_name' => 'author_status',
                'value' => 'Директор компании',
                'description' => __( 'Введите должность', 'wayup' ),
            ),
        ),
    ) );
}


// PROGRESS MODULE
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_Progress_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_progress_module',
        'name' => __( 'Прогресс модуль', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title1',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title2',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок3', 'wayup' ),
                'param_name' => 'title3',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок4', 'wayup' ),
                'param_name' => 'title4',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Значение1', 'wayup' ),
                'param_name' => 'value1',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Значение2', 'wayup' ),
                'param_name' => 'value2',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Значение3', 'wayup' ),
                'param_name' => 'value3',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Значение4', 'wayup' ),
                'param_name' => 'value4',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'attach_image',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Фото для фона', 'wayup' ),
                'param_name' => 'bg',
                'value' => '',
                'description' => __( 'Загрузите фото', 'wayup' ),
            ),
        ),
    ) );
}



// СЛАЙДЕР


if(class_exists('WPBakeryShortCodesContainer')){
    class WPBakeryShortCode_Wayup_Team_Slider extends WPBakeryShortCodesContainer{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_team_slider',
        'name' => 'Наша команда',
        'as_parent' => array('only' => 'wayup_team_slider_item'),
        'class' => '',
        'content_element' => true,
        'show_settings_on_create' => false,
        'category' => 'Wayup',
        'params' => array(),
        'js_view' => 'VcColumnView'
        )
    );
}



if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_Team_Slider_Item extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_team_slider_item',
        'name' =>  'Член команды', 
        'as_child' => array('only' => 'wayup_team_slider'),
        'show_settings_on_create' => true,
        'class' => '',
        'category' => 'Wayup',
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'attach_image',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Фото члена команды', 'wayup' ),
                'param_name' => 'photo',
                'description' => __( 'Вставьте картинку', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Имя', 'wayup' ),
                'param_name' => 'name',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Должность', 'wayup' ),
                'param_name' => 'status',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Описани', 'wayup' ),
                'param_name' => 'desc',
                'value' => '',
                'description' => __( 'Введите описание', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'heading' => __( 'Вк линк', 'wayup' ),
                'param_name' => 'vklink',
                'value' => '',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
        ),
    ) );
}


// HELP блок с кейсами
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_Features_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_features_module',
        'name' => __( 'Кейсы', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title11',
                'value' => 'Наши',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title22',
                'value' => 'Кейсы',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок3', 'wayup' ),
                'param_name' => 'descs',
                'value' => 'Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
          
        ),
    ) );
}


// БЛОК ПОМОЩИ
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_Help_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_help_module',
        'name' => __( 'Блок помощи', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title1',
                'value' => 'Кому мы',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title2',
                'value' => 'Помогаем',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textarea',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Описание', 'wayup' ),
                'param_name' => 'desc',
                'value' => 'Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса',
                'description' => __( 'Введите описание', 'wayup' ),
            ),
         
        ),
    ) );
}


// БЛОК ОТЗЫВОВ
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_Testimonials_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_testimonials_module',
        'name' => __( 'Отзывы', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title1',
                'value' => 'За нас говорят',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title2',
                'value' => 'НАШИ КЛИЕНТЫ',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
         
         
        ),
    ) );
}



// БЛОК Услуги
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_Services_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_services_module',
        'name' => __( 'Услуги', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title1',
                'value' => 'Наши',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title2',
                'value' => 'УСЛУГИ',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
        ),
    ) );
}


// БЛОК Новости
if(class_exists("WPBakeryShortCode")){
    class WPBakeryShortCode_Wayup_News_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')){
    vc_map( array(
        'base' => 'wayup_news_module',
        'name' => __( 'Новости', 'wayup' ),
        'class' => '',
        'category' => __( 'Wayup' ),
        'icon' => 'icon-heart',
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок1', 'wayup' ),
                'param_name' => 'title1',
                'value' => 'Актуальные',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'heading' => __( 'Заголовок2', 'wayup' ),
                'param_name' => 'title2',
                'value' => 'НОВОСТИ',
                'description' => __( 'Введите текст', 'wayup' ),
            ),
        ),
    ) );
}


















