<?php

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$args = array(
	'post_type' => 'post',
	'category__in' => wp_get_post_categories(get_the_ID()),
	'post__not_in' => array(get_the_ID()),
	'posts_per_page' => 3,
	'orderby' => 'date',
);
$context['related'] =  Timber::get_posts( $args );

Timber::render( 'single.twig', $context );