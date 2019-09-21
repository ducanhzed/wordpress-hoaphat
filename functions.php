<?php

//load stylesheets

function load_stylesheets(){
    wp_register_style('icon', get_template_directory_uri().'/img/core-img/favicon.ico',array(), 1, 'all');
    wp_enqueue_style('icon');

    wp_register_style('stylesheet', get_template_directory_uri().'/style.css',array(), 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri().'/custom.css',array(), 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


//load scripts
function addjs(){
    // JQUERY 2.2.4
    wp_register_script('jquery',get_template_directory_uri().'/js/jquery/jquery-2.2.4.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    // POOPER JS
    wp_register_script('pooper',get_template_directory_uri().'/js/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('pooper');

    //BOOSTRAP
    wp_register_script('boostrap',get_template_directory_uri().'/js/boostrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('boostrap');

    //PLUGINS JS
    wp_register_script('plugins',get_template_directory_uri().'/js/plugins.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins');
    

    //CLASSY-NAV JS
    wp_register_script('classyNav',get_template_directory_uri().'/js/classy-nav.min.js', array(), 1, 1, 1);
    wp_enqueue_script('classyNav');

    //JQUERY UI
    wp_register_script('jqueryUI',get_template_directory_uri().'/js/jquery-ui.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jqueryUI');

    //ACTIVE JS
    wp_register_script('active',get_template_directory_uri().'/js/active.js', array(), 1, 1, 1);
    wp_enqueue_script('active');

    //CUSTOM
    wp_register_script('custom',get_template_directory_uri().'/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}

add_action('init','addjs');
