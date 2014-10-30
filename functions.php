<?php

  /**
   * Timber setup
   */
  if ( !class_exists('Timber') ) {
    require_once dirname( __FILE__ ) . '/lib/vendor/timber/timber.php';
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
    'lib/timber.php',                 // Timber extensions
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
