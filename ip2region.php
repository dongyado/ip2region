<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('ip2region')) {
	dl('ip2region.' . PHP_SHLIB_SUFFIX);
}

function getTime(){
    return microtime(true) * 1000;
}

//$start = getTime();
//$data  = btreeSearch("120.24.78.68");
//$end   = getTime();
//var_dump($data);
//echo "taken: ", ($end - $start), "\n";
//
//$start = getTime();
//$data  = btreeSearch("30.24.78.68");
//$end   = getTime();
//var_dump($data);
//echo "taken: ", ($end - $start), "\n";
//
//
//$start = getTime();
//$data  = binarySearch("200.24.78.68");
//$end   = getTime();
//var_dump($data);
//echo "taken: ", ($end - $start), "\n";



// test class
$ip2region = new Ip2region();
function classBtreeSearch($ip2region, $ip)
{

    $start = getTime();
    $data  = $ip2region->btreeSearch($ip);
    $end   = getTime();
    var_dump($data);
    echo "taken: ", ($end - $start), "\n";
}

function classBinarySearch($ip2region, $ip)
{

    $start = getTime();
    $data  = $ip2region->binarySearch($ip);
    $end   = getTime();
    var_dump($data);
    echo "taken: ", ($end - $start), "\n";
}

classBtreeSearch( $ip2region, "120.24.67.3");
classBtreeSearch( $ip2region, "120.24.67.3");
classBinarySearch($ip2region, "120.24.67.3");
classBinarySearch($ip2region, "120.24.67.3");

?>
