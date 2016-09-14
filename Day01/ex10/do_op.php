<?php
if ($argc == 4)
{
    $argv[2] = trim($argv[2]);
    if ($argv[2] == '+')
        echo ($argv[1] + $argv[3])."\n";
    else if ($argv[2] == '-')
        echo ($argv[1] - $argv[3])."\n";
    else if ($argv[2] == '/' && $argv[3] != "0")
        echo ($argv[1] / $argv[3])."\n";
    else if ($argv[2] == '*')
        echo ($argv[1] * $argv[3])."\n";
    else if ($argv[2] == '%' && $argv[3] != "0")
        echo ($argv[1] % $argv[3])."\n";
    else
        echo "Invalid operation.\n";
}
else
    echo "Incorrect Parameters\n";