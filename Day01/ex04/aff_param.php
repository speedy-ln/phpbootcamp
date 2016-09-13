<?php
$var = 1;
while (isset($argv[$var]))
{
    echo $argv[$var] . "\n";
    $var++;
}