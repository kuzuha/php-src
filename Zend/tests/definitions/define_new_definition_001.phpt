--TEST--
define new definition
--FILE--
<?php

definition Foo {
}

var_dump((new ReflectionClass("Foo"))->isFinal());
--EXPECT--
bool(true)
