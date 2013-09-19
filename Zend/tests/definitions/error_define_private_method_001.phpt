--TEST--
Trying to define a private method
--FILE--
<?php

definition Foo {
	private function bar() {}
}
--EXPECTF--
Fatal error: Access type for definition method Foo::bar() must be public in %s on line %d
