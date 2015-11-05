<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('ip2region')) {
	dl('ip2region.' . PHP_SHLIB_SUFFIX);
}

$ip2region = ip2region_create();

function getTime(){
    return microtime(true) * 1000;
}

$start = getTime();
$data  = btree_search($ip2region, "120.24.78.68");
$end   = getTime();
var_dump($data);
echo "\n taken: ", ($end - $start), "\n";

$start = getTime();
$data  = btree_search($ip2region, "120.24.78.68");
$end   = getTime();
var_dump($data);
echo "\n taken: ", ($end - $start), "\n";


$start = getTime();
//var_dump(btree_search($ip2region, "12.24.78.68"));
$data  = btree_search($ip2region, "12.24.78.68");
$end   = getTime();
var_dump($data);
echo "\n taken: ", ($end - $start), "\n";

$start = getTime();
//var_dump(btree_search($ip2region, "12.24.78.68"));
$data  = btree_search($ip2region, "36.24.78.68");
$end   = getTime();
var_dump($data);

echo "\n taken: ", ($end - $start), "\n";
$start = getTime();
$data = d_btree_search( "120.24.78.68");
$end   = getTime();
var_dump($data);
echo "\n taken: ", ($end - $start), "\n";


$start = getTime();
$data = d_binary_search( "120.24.78.68");
$end   = getTime();
var_dump($data);
echo "\n taken: ", ($end - $start), "\n";

echo "\n";
?>
