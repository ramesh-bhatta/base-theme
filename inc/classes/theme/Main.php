<?php 

namespace Techie\Theme;

use Techie\Menu\mainMenu;

class Main{
    private $theme_supports=[];
    public function __construct()
    {
        $this->theme_supports=[
            'customize-selective-refresh-widgets',
            'custom-logo',
            'menus'
        ];
        add_action("after_switch_theme",array($this,"setup_theme"));
        add_action("after_switch_theme",array($this,"init_theme"));
        add_action("init",array($this,"add_theme_support"));
        add_action("init",array($this,"add_public_hooks"));
    }

    public function setup_theme(){

    }

    public function init_theme(){
        
    }

    public function add_theme_support(){
        if(!empty($this->theme_supports)){
            foreach($this->theme_supports as $theme_support){
                if(is_array($theme_support)){
                    add_theme_support($theme_support[0],$theme_support[1]);
                }
                else{
                    add_theme_support($theme_support);
                }

            }
        }
    }

    public function add_public_hooks(){
        new publicStyle();
        new mainMenu();
    }

}