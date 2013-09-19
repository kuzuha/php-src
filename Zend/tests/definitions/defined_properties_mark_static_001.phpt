--TEST--
defined properties mark static automatcally
--FILE--
<?php

definition Foo {
	public $public = 1;
	protected $protected =2;
	private $private =3;

	function bar() {
		return self::$public + self::$protected + self::$private;
	}
}

var_dump(Foo::bar());
var_dump(Foo::$public);
--EXPECT--
int(6)
int(1)
