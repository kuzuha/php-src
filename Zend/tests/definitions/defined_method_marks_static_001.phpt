--TEST--
defined method marks static automatically
--FILE--
<?php
definition Foo {
	function bar() {
		echo "ok";
	}
}

var_dump((new ReflectionMethod('Foo', 'bar'))->isStatic());

Foo::bar();
--EXPECT--
bool(true)
ok
