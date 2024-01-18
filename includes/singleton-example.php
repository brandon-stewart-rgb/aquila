<?php 

// singleton way: 
class User {
    // to hold an instance of the class
    private static $instance;
    // the singleton method
    public static function get_instance() {

     /**
     *if an instance of a class is not set or created,
     *create and instance of a class ( instantiate it) and store that class in an instance. *
     */

        if ( ! isset( self::$instance)){
            self::$instance = new __CLASS__; // __CLASS__ here equals User.
        }
     return self::$instance;
    }
}

$user1 = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();