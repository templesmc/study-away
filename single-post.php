<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['item'] = $post;

$context['pagination'] = wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'smc'), 'after' => '</p></nav>'));

Timber::render( 'single.twig', $context );
