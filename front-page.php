<?php
$context = Timber::context();

$context['post'] = new Timber\Post();

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 6,
	'orderby' => array(
			'date' => 'DESC'
	)
);
$context['posts'] =  new Timber\PostQuery( $args );

$context['hederimage'] = get_header_image();

Timber::render( 'frontPage.twig', $context );