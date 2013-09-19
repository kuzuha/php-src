--TEST--
Trying to instantiate a definition
--FILE--
<?php

definition abc { 
}

new abc;

?>
--EXPECTF--
Fatal error: Cannot instantiate definition abc in %s on line %d
