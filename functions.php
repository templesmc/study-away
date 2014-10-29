<?php

  /**
   * Timber setup
   */
  if ( !class_exists('Timber') ) {
    require_once dirname( __FILE__ ) . '/lib/vendor/timber/timber.php';
    require_once dirname( __FILE__ ) . '/lib/timber.php';
  }

  /**
   * SMC includes
   *
   * The $smc_includes array determines the code library included in your theme.
   * Add or remove files to the array as needed. Supports child theme overrides.
   *
   * Please note that missing files will produce a fatal error.
   *
   * @link https://github.com/roots/roots/pull/1042
   */
  $smc_includes = array(
    'lib/utils.php',                  // Utility functions
    'lib/init.php',                   // Initial theme setup and constants
    'lib/sidebar.php',                // Sidebar class
    'lib/config.php',                 // Configuration
    'lib/titles.php',                 // Page titles
    'lib/nav.php',                    // Custom nav modifications
    'lib/gallery.php',                // Custom [gallery] modifications
    'lib/scripts.php',                // Scripts and stylesheets
    'lib/extras.php',                 // Custom functions
  );

  foreach ($smc_includes as $file) {
    if (!$filepath = locate_template($file)) {
      trigger_error(sprintf(__('Error locating %s for inclusion', 'smc'), $file), E_USER_ERROR);
    }

    require_once $filepath;
  }
  unset($file, $filepath);

	add_filter('get_twig', 'add_to_twig');
	add_filter('timber_context', 'add_to_context');


	define('THEME_URL', get_template_directory_uri());
	function add_to_context($data){
		/* this is where you can add your own data to Timber's context object */
		$data['qux'] = 'I am a value set in your functions.php file';
		$data['menu'] = new TimberMenu();
		return $data;
	}

	function add_to_twig($twig){
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension(new Twig_Extension_StringLoader());
		$twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
		return $twig;
	}

	function myfoo($text){
    	$text .= ' bar!';
    	return $text;
	}
