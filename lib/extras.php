<?php
/**
 * Clean up the_excerpt()
 */
function smc_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'smc') . '</a>';
}
add_filter('excerpt_more', 'smc_excerpt_more');

/**
 * Manage output of wp_title()
 */
function smc_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'smc_wp_title', 10);
