<?php

// timber specific functions

class TimberSpec extends Timber\Site {

	public function __construct() {
		add_filter( 'timber/context', array( $this, 'addToContext' ) );
		parent::__construct();
	}

	public function addToContext( $context ) {

		// menu-object from registered menu
		$context['menuPrimary']  = new Timber\Menu('primary');
		$context['menuSecondary']  = new Timber\Menu('secondary');
		$context['menuFooter']  = new Timber\Menu('footer');

		// acf options page datas
		$context['options'] = get_fields('option');

		// site stuff
		$context['site']  = $this;
		$context['logo'] = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' );


		$context['footer']['warranty']  	= _('1 year Warranty');
		$context['footer']['shipping']  	= _('Shipping Worldwide');

		return $context;
	}

}
new TimberSpec();