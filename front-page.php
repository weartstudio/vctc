<?php
$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$context['hederimage'] = get_header_image();

Timber::render( 'frontPage.twig', $context );