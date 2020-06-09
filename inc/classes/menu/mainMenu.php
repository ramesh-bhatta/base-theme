<?php
namespace Techie\Menu;

class mainMenu
{
    public function __construct()
    {
        add_action("after_theme_setup",array($this,"registerNavMenus"));
        add_filter("nav_menu_css_class",array($this,"addMenuLinkClass"),10,3);
        add_filter( 'nav_menu_link_attributes',array($this,'addMenuClassAttribute'),10,3);
    }

    public function registerNavMenus(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'techie' ),
            'footer_menu'  => __( 'Footer Menu', 'techie' ),
        ) );
    }

    public function addMenuLinkClass($classes,$item,$args){
        if(property_exists($args,"li_class")){
            //merge new class based li_class string
            $classes=array_merge($classes,explode(" ",$args->li_class));
        }
        return $classes;
    }

    public function addMenuClassAttribute($atts, $item, $args ){
        if(property_exists($args,"link_class")){
            $atts['class']=$args->link_class;
        }
        return $atts;
    }

    public static function getPrimaryMenu($args){
        return wp_nav_menu($args);
    }


    public static function getMenu(){

    }

}