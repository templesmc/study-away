<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

	$context = Timber::get_context();

  $context['msg']              = array();
  $context['msg']['reasons']   = array();
  $context['msg']['alert']     = __('Sorry, but the page you were trying to view does not exist.', 'smc');
  $context['msg']['explain']   = __('It looks like this was the result of either:', 'smc');
  $context['msg']['reasons'][] = __('a mistyped address', 'smc');
  $context['msg']['reasons'][] = __('an out-of-date link', 'smc');

	Timber::render('404.twig', $context);
