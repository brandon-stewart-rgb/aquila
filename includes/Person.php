<?php

// class Person {
//     public function __construct() {
//         echo 'Person' . '</br>';
//     }
// };


trait Say_World{
    public function say_hello() {
        echo 'Hello Trait';
    }
}

class Base {
    use Say_World;
}

$base = new Base();
$base->say_hello();