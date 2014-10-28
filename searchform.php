<?php

$context = Timber::get_context();
$p = Timber::query_post();
$context['item'] = get_post( $p->ID );

$context['title'] = smc_title();
$context['query'] = get_search_query();

$context['msg'] = array();
$context['msg']['search'] = _e('Search', 'smc');

Timber::render( 'partials/search-form.twig', $context );
