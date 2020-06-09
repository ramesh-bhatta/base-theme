<?php


namespace Techie\Theme;


class publicStyle
{
    public function __construct()
    {
        add_action("wp_enqueue_scripts",array($this,'addThemeStylesheet'),100,1);
    }

    public function addThemeStylesheet(){
        wp_enqueue_style("bootstrap-style","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
        wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    }
}