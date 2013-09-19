--TEST--
Trying to definition extends class
--FILE--
<?php

class Foo {
}

definition Bar extends Foo {
}
--EXPECTF--
Fatal error: Definition Bar cannot extend from Foo in %s on line %d
