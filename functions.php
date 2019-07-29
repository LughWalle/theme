<?php
    if (!is_admin()) {
        add_action('wp_enqueue_scripts', 'Theme_load_style', 13);
        //abertura dos arquivos css
        function Theme_load_style()
        {
            //bootstrap
            wp_register_style(
                'boostrap',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
                array(),
                null,
                'all'
            );
            wp_enqueue_style('boostrap');

            wp_register_style('theme-style',
                get_stylesheet_uri(),
                array(),
                'all'
            );
            wp_enqueue_style('theme-style');
        }

        //arquivos js
        add_action('wp_enqueue_scripts', 'Theme_load_script', 14);
        function Theme_load_script()
        {
            //JQuery
            wp_deregister_script('jquery');
            wp_register_script(
                'jquery',
                'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
                array(),
                null,
                false);
            wp_enqueue_scripts('jquery');

            //bootstrap
            wp_register_script(
                'bs-script',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
                array('jquery'),
                null,
                true
            );
            wp_enqueue_script('bs-script');
        }
    }