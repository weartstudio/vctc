<?php

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$args = array(
	'post_type' => 'page',
	'posts_per_page' => 4,
	'post__in' => get_field('featured-pages','option'),
	'post__not_in' => array(get_the_ID()),
);
$timber_pages = new Timber\PostQuery( $args );
$context['featured'] =  $timber_pages;


Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );