--TEST--
Testing definition_exists()
--FILE--
<?php

definition foo {
}

var_dump(definition_exists('foo'));
var_dump(definition_exists(1));
var_dump(definition_exists(NULL));
var_dump(definition_exists(new stdClass));

?>
--EXPECTF--
bool(true)
bool(false)
bool(false)

Warning: definition_exists() expects parameter 1 to be string, object given in %s on line %d
NULL
