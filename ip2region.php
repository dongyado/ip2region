<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('ip2region')) {
	dl('ip2region.' . PHP_SHLIB_SUFFIX);
}

function getTime(){
    return microtime(true) * 1000;
}


$start = getTime();
$data  = btreeSearch("120.24.78.68");
$end   = getTime();
var_dump($data);
echo "taken: ", ($end - $start), "\n";

$start = getTime();
$data  = btreeSearch("30.24.78.68");
$end   = getTime();
var_dump($data);
echo "taken: ", ($end - $start), "\n";


$start = getTime();
$data  = binarySearch("200.24.78.68");
$end   = getTime();
var_dump($data);
echo "taken: ", ($end - $start), "\n";
?>
