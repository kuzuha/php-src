--TEST--
define const
--FILE--
<?php

definition Foo {
	const BAR = 1;
}

echo Foo::BAR;
--EXPECT--
1
