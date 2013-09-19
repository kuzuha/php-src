--TEST--
Trying to definition extends trait
--FILE--
<?php

trait Foo {
}

definition Bar extends Foo {
}
--EXPECTF--
Fatal error: Definition Bar cannot extend from Foo in %s on line %d
