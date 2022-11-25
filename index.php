<?php

$context          = Timber::context();
$context['posts'] = new Timber\PostQuery();
$context['post'] = new Timber\Post();
//
$context['cats'] = Timber::get_terms('category');

$context['title'] = "";
if ( is_day() ) {
	$context['title'] = 'Archívum: '.get_the_date( 'D M Y' );
} else if ( is_month() ) {
	$context['title'] = 'Archívum: '.get_the_date( 'M Y' );
} else if ( is_year() ) {
	$context['title'] = 'Archívum: '.get_the_date( 'Y' );
} else if ( is_tag() ) {
	$context['title'] = single_tag_title( '', false );
} else if ( is_category() ) {
	$context['title'] = single_cat_title( '', false );
} else if ( is_tax() ){
	$term = get_queried_object(); // Is this the appropriate way to do it?
	$context['title'] = $term->name;
} else if ( is_post_type_archive() ) {
	$context['title'] = post_type_archive_title( '', false );
}


Timber::render( 'index.twig', $context );