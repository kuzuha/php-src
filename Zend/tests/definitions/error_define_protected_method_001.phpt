--TEST--
Trying to define a protected method
--FILE--
<?php

definition Foo {
	protected function bar() {}
}
--EXPECTF--
Fatal error: Access type for definition method Foo::bar() must be public in %s on line %d
