<?php

Class ThemeSupport extends Singleton
{

    public $themeSupport = array(
        // 'automatic-feed-links',
        'title-tag',
        'post-thumbnails',
        'menus',
        'custom-logo',
        'custom-header'
    );

    public function __construct()
    {
        foreach($this -> themeSupport as $item)
        {
            add_theme_support( $item );
        }
    }

}

ThemeSupport::getInstance();