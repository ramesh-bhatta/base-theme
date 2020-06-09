<!DOCTYPE HTML>
<html>
<head>
    <title>Projection by TEMPLATED</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body>

<!-- Header -->
<header class="bg-light">
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-4">
                <img src="<?php echo \Techie\Utils\Helper::getLogoURL() ?>"  alt="<?php echo bloginfo('name') ?>"/>
            </div>
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg  text-right">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        \Techie\Menu\mainMenu::getPrimaryMenu(array(
                            'menu_class'=>"navbar-nav ml-auto",
                            "container"=>"ul",
                            "li_class"=>"nav-item",
                            "link_class"=>"nav-link"
                        ));
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>