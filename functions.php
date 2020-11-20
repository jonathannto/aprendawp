<?php
       
    //Register custom navigation walker
    require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';

    //carregando nossos scripts e folhas de estilos
    function aprendawp_load_scripts(){
        
        //bootstrap javascript and css files
        
        wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/inc/bootstrap.min.css', array(),'4.3.1', 'all');
        wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'), '4.3.1', true);
        //theme's main stylesheet
        wp_enqueue_style( 'aprendawp-style', get_stylesheet_uri(), array(), '1.0', 'all');
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?
            family=Rajdhani:wght@400;500;600;700&family=Seaweed+Script&display=swap"');

    }

    //função responsável por agrupar todas as configurações do tema
    function aprendawp_config() {
 
        register_nav_menus( //realiza o registro de menus
            array(
                'aprendawp_main_menu' => 'Aprenda WP Main Menu',
                'aprendawp_footer_menu' => 'Aprenda WP Footer Menu',
            )
        );
    }

    //add_action permite associar uma função a um gancho de ação... o 0 é a prioridade da execução.
    add_action('after_setup_theme','aprendawp_config',0);
    add_action( 'wp_enqueue_scripts','aprendawp_load_scripts');

    //after_setup_theme aplica as configurações de menu e tema.
