--TEST--
Trying to use traits inside of definition
--FILE--
<?php

trait Foo {
}

definition Bar {
	use Foo;
}
--EXPECTF--
Fatal error: Cannot use traits inside of definition. Foo is used in Bar in %s on line %d
