<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('ip2region')) {
	dl('ip2region.' . PHP_SHLIB_SUFFIX);
}
?>
