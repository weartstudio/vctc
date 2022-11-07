<?php
Class AcfFields extends Singleton
{

    public function __construct()
    {
        if( class_exists('ACF') ):
            // add_filter('acf/settings/show_admin', '__return_false');
            // $this -> optionsPage();
        endif;
    }

    function optionsPage()
    {
        acf_add_options_page(array(
            'page_title' 	=> 'Sablon alapvető beállításai',
            'menu_title'	=> 'Sablonbeállítások',
            'menu_slug' 	=> 'theme-settings',
            'capability'	=> 'edit_posts',
            'parent'        => 'themes.php',
            'redirect'		=> true
        ));
    }

}
AcfFields::getInstance();