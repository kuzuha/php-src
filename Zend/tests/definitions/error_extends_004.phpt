--TEST--
Trying to definition extends definition
--FILE--
<?php

definition Foo {
}

definition Bar extends Foo {
}
--EXPECTF--
Fatal error: Definition Bar cannot extend from Foo in %s on line %d
