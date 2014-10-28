<?php

function smc_filter_timber_context ( $context ) {

  $context['site']['nav']                   = wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
  $context['site']['feed_link']             = esc_url(get_feed_link());
  $context['site']['browse_happy']          = _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'smc');
  $context['site']['last_modified']['date'] = the_modified_time('F j, Y');
  $context['site']['last_modified']['time'] = the_modified_time('g:i a');

  $context['post']['msg']['by']         = __('By', 'smc');
  $context['post']['msg']['search_for'] = _e('Search for:', 'smc');

  return $context;

}
add_filter( 'timber_context', 'smc_filter_timber_context' );
