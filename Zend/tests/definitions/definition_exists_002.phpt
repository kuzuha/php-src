--TEST--
Testing definition_exists() inside a namespace
--FILE--
<?php

namespace foo;

definition IFoo { }

definition ITest { }


var_dump(definition_exists('IFoo'));
var_dump(definition_exists('foo\\IFoo'));
var_dump(definition_exists('FOO\\ITEST'));

?>
--EXPECT--
bool(false)
bool(true)
bool(true)
