--TEST--
Checking definition_exists(): interface, abstract and final class, trait, definition
--FILE--
<?php

interface a { }

abstract class b { }

final class c { }

trait d {}

definition e {}

var_dump(definition_exists('a'));
var_dump(definition_exists('b'));
var_dump(definition_exists('c'));
var_dump(definition_exists('d'));
var_dump(definition_exists('e'));
--EXPECT--
bool(false)
bool(false)
bool(false)
bool(false)
bool(true)
