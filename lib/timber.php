<?php

function smc_filter_timber_context ( $context ) {

  $context['get_header'] = do_action( 'header' );

  // $context['site']['nav']                   = wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
  $context['feed_link']             = esc_url(get_feed_link());
  $context['browse_happy']          = __('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'smc');
  $context['last_modified']['date'] = get_the_modified_time('F j, Y');
  $context['last_modified']['time'] = get_the_modified_time('g:i a');


  $context['msg']                            = array();
  $context['msg']['not_found']               = array();
  $context['msg']['by']                      = __('By', 'smc');
  $context['msg']['search']                  = __('Search', 'smc');
  $context['msg']['search_for']              = __('Search for:', 'smc');
  $context['msg']['not_found']['no_results'] = __('Sorry, no results were found.', 'smc');
  $context['msg']['not_found']['alert']      = __('Sorry, but the page you were trying to view does not exist.', 'smc');
  $context['msg']['not_found']['explain']    = __('It looks like this was the result of either:', 'smc');
  $context['msg']['not_found']['reasons'][]  = __('a mistyped address', 'smc');
  $context['msg']['not_found']['reasons'][]  = __('an out-of-date link', 'smc');

  return $context;

}
add_filter( 'timber_context', 'smc_filter_timber_context' );
