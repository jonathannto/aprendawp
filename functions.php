<?php
       
    //Register custom navigation walker
    require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';

    //carregando nossos scripts e folhas de estilos
    function aprendawp_load_scripts(){
        
        //bootstrap javascript and css files
        
        wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/inc/bootstrap.min.css', array(),'4.3.1', 'all');
        wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'), '4.3.1', true);
        //theme's main stylesheet
        wp_enqueue_style( 'style', get_template_directory_uri().'/styles.css', array(), '1.0', 'all');
        wp_enqueue_style( 'aprendawp-style', get_stylesheet_uri(), array(), '1.0', 'all');
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?
            family=Rajdhani:wght@400;500;600;700&family=Seaweed+Script&display=swap"');

        //flexslider Javascript and CSS Files
        wp_enqueue_script('flexslider-min-js',
            get_template_directory_uri() .'/inc/flexslider/jquery.flexslider-min.js',
            array('jquery'), '', true);
                wp_enqueue_style( 'flexslider-css', get_template_directory_uri() .'/inc/flexslider/flexslider.css',
                array(),'','all');
                wp_enqueue_script( 'flexslider-js', get_template_directory_uri() .'/inc/flexslider/flexslider.js', array( 'jquery'), '', true);
    }
    //add_action permite associar uma função a um gancho de ação... o 0 é a prioridade da execução.
    add_action( 'wp_enqueue_scripts','aprendawp_load_scripts',0);
    add_action('after_setup_theme','aprendawp_config');

    //função responsável por agrupar todas as configurações do tema
    function aprendawp_config() {
        $args = array(
            'height'=>225,
            'width'=>1920
        );
    
        register_nav_menus( //realiza o registro de menus
            array(
                'aprendawp_main_menu' => 'Aprenda WP Main Menu',
                'aprendawp_footer_menu' => 'Aprenda WP Footer Menu',
            )
        );

        add_theme_support('custom-header', $args); //adiciona suporte para custmizar cabecalhos
        add_theme_support('post-thumbnails'); //adiciona suporte a miniaturas de posts
        add_theme_support('title-tag'); //titulo para rankear os titulos do site para uma melhor politica de SEO
        add_theme_support('custom-logo'); //logo customizado no alto da aba
        
        
        set_post_thumbnail_size(235,510,true);
        add_image_size('aprendawp-blog', 960, 640, array('center', 'center'));  
        add_image_size('aprendawp-slider', 1920, 800, array('center', 'center'));
    }

    

    //after_setup_theme aplica as configurações de menu e tema.
