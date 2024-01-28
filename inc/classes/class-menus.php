<?php 
/**
 * Register menus
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;

 class Menus {
        use Singleton;

    
    
        protected function __construct() {
            $this->setup_hooks();
        }
    
        protected function setup_hooks(){
            // actions
        add_action ( 'init',  [ $this, 'register_menus'] );
        }
        
       public function register_menus(){
        register_nav_menus ([ 
            'aquila-header-menu'=> esc_html__('Header Menu', 'aquila'),
            'aquila-footer-menu'=> esc_html__('Footer Menu', 'aquila')
        ]);
       }

       public function get_menu_id ( $location ) {
         // get all the locations
         $locations = get_nav_menu_locations();
    
        //get object id by location
        $menu_id = $locations[ $location ];
      
        // not empty (id) return menu id else nothing
        return ! empty( $menu_id ) ? $menu_id : '';
       }

       // filter through array and select only child menu items
       public function get_child_menu_items ( $menu_array, $parent_id ) {
        $child_menus = [];
        // check to see if it's not empty before running a foreach loop
         if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
            foreach ( $menu_array as $menu ) {
                if ( intval( $menu->menu_item_parent ) === $parent_id ) {
                    array_push( $child_menus, $menu );
                }
            }
         }
         return $child_menus;
       }
    
     


 }