<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 */

	$context = Timber::get_context();
	$context['items'] = Timber::get_posts();

  $context['pagination']['display'] = $wp_query->max_num_pages > 1;
  $context['pagination']['prev'] = get_next_posts_link(__('&larr; Older posts', 'smc'));
  $context['pagination']['next'] = get_previous_posts_link(__('Newer posts &rarr;', 'smc'));

	$templates = array('index.twig');
	if (is_home()){
		array_unshift($templates, 'home.twig');
	}

	Timber::render('index.twig', $context);


