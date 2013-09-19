--TEST--
Trying to definition extends interface
--FILE--
<?php

interface Foo {
}

definition Bar extends Foo {
}
--EXPECTF--
Fatal error: Definition Bar cannot extend from Foo in %s on line %d
