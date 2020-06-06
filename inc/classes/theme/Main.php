<?php 

namespace Techie\Theme;

class Main{
    public function __construct()
    {
        add_action("after_switch_theme",array($this,"init_theme"));
    }

    public function init_theme(){
        
    }

    public function setup_theme(){
        
    }
}