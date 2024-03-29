<?php 
/**
 * Bootstraps the Theme.
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
       // Load class. 
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks(){
    // add actions
    add_action ('after_setup_theme', [ $this, 'setup_theme']);

    }
    
    public function setup_theme(){

      
      add_theme_support( 'title-tag' );

      add_theme_support( 'custom-logo', [
         'header-text'          => [ 'site-title', 'site-description' ] ,
         'height'               => 100,
         'width'                => 400,
         'flex-height'          => true,
         'flex-width'           => true,
      ] );
      add_theme_support( 'custom-background', [
         'default-color' => 'ffffff',
         'default-image' => '',
         'default-repeat' => 'no-repeat',
      ]);

      add_theme_support( 'post-thumbnails');

      add_theme_support( 'customize-selective-refresh-widgets');

      add_theme_support( 'automatic-feed-links');

//outputs valid HTML5 
      add_theme_support( 
         'html5',
         [
            'search-form',
            'comment-form',
            'gallery',
            'caption',
            'script',
            'style',
         ]
      );
      // tiny mce editor stylesheet
      add_editor_style();

      add_theme_support( 'wp-block-styles' );

      // full width image support
      add_theme_support( 'align-wide' );

      // sets max width for all content
      global $content_width;
      if ( ! isset( $content_width )) {
         $content_width = 1240;
      }
    }

 }