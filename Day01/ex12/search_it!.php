<?php
if ($argc >= 3)
{
    $name = trim($argv[1]);
    $name1 = array();
    $cat = 0;
    $i = 2;
    while ($argv[$i])
    {
        $temp = explode(":", $argv[$i]);
        if (strcmp($temp[0], $name) == 0)
        {
            echo $temp[1] . "\n";
            exit();
        }
        $i++;
    }
    $i = 0;
}