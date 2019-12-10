<?php

$aantal = intval($argv[1]);
define("geld", array(50,20,10,5,2,1));

foreach (geld as $uitkomst){
    if ($aantal >= $uitkomst){

        $vloer = floor ($aantal / $uitkomst);

        echo "$vloer * $uitkomst euro".PHP_EOL;

        $aantal = $aantal - ($vloer * $uitkomst);
    }
}