<?php

$context = Timber::get_context();
$p = Timber::query_post();
$context['item'] = get_post( $p->ID );

$context['page_title'] = smc_title();

$context['pagination'] = wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>'));

Timber::render( 'page.twig', $context );
