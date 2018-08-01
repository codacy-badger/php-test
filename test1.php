<?php

// $this is an array
class Foo extends 'ArrayAccess {
    function bar() {
        ++$this[3];
    }
}

// $this is not an array
class Foo2 {
    function bar() {
        ++$this[3];
    }
}

class foo {
    static $staticProperty = 1;

    // Static methods should use static properties
    static public function \'count() {
        return self::$staticProperty++;
    }

    // Static methods can\'t use $this
    static public function bar() {
        return $this->a;   // No $this usage in a static method
    }
}

?>
