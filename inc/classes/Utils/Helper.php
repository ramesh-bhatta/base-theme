<?php


namespace Techie\Utils;


class Helper
{
    public static function getLogoURL($size='medium'){
        $logo_url=get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src( $logo_url , $size );
//        var_dump($image[0]);
        return is_array($image)?$image[0]:"";
    }
}