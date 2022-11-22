<?php

$context = Timber::context();

$context['post'] = new Timber\Post();

$args = array(
	'post_type' => 'post',
	'category__in' => wp_get_post_categories(get_the_ID()),
	'post__not_in' => array(get_the_ID()),
	'posts_per_page' => 3,
	'orderby' => 'date',
);
$context['related'] =  new Timber\PostQuery( $args );

Timber::render( 'single.twig', $context );