<?php
/**
Plugin Name: Rad's ACF Hooks
Plugin URI: www.radcampaign.com
Description: Handles the exporting and importing of ACF form data to a trackable config directory.
Author: Rad campaign
Version: 0.0
Author URI: radcampaign.com
*/

class Custom_ACF_Hooks
{

  protected static $instance = null;

  public static function getInstance()
  {
    if (empty(self::$instance)) {
      self::$instance = new static();
    }

    return self::$instance;
  }

  public static function create()
  {
    return self::getInstance();
  }

  public static function register_filters()
  {
    $self = self::getInstance();
    /*
     * all hooks explained by acf
     * https://www.advancedcustomfields.com/resources/local-json/
     */
    add_filter('acf/settings/save_json', function () use ($self) {
      return $self->get_config_dir();
    });

    add_filter('acf/settings/load_json', function ($paths) use ($self) {
      $paths[] = $self->get_config_dir();
      return $paths;
    });

    /* if the user is not admin, lets hide the custom fields button */
    if (!current_user_can('administrator')) {
        add_filter('acf/settings/show_admin', '__return_false');
    }
  }

  public function get_config_dir()
  {
    // this will ensure that the directory exists
    $dir = join(DIRECTORY_SEPARATOR, [WP_CONTENT_DIR, 'acf-config']);

    if (!file_exists($dir)) {
      mkdir($dir);
    }
    // if its not a directory then lets make one that'll fit
    else if (!is_dir($dir)){
      $counter = 0;
      while (!is_dir($dir)) {
        $dir = $dir . $counter;
      }
      if (!file_exists($dir)) {
        mkdir($dir);
      }
    }

    return $dir;
  }

}

$init = Custom_ACF_Hooks::create();
add_action('init', array($init, 'register_filters'), 0);
