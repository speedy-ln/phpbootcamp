<?php
if ($argc == 2)
{
    $argv = trim($argv[1]);
    $var = 0;
    while ($argv[$var] == " " || $argv[$var] == "\t")
        $var++;
    while (ctype_digit($argv[$var]))
    {
        $num .= $argv[$var];
        $var++;
    }
    while ($argv[$var] == " " || $argv[$var] == "\t")
        $var++;
    if ($argv[$var] == '+' || $argv[$var] == '-' || $argv[$var] == '*' || $argv[$var] == '%' || $argv[$var] == '/')
        $op = $argv[$var];
    else
    {
        echo "Syntax error\n";
        exit;
    }
    $var++;
    while ($argv[$var] == " " || $argv[$var] == "\t")
    {
        if (ctype_alpha($argv[$var]))
        {
            echo "Syntax error\n";
            exit;
        }
        $var++;
    }
    while (ctype_digit($argv[$var]))
    {
        $num2 .= $argv[$var];
        $var++;
    }
    if (ctype_alpha($argv[$var]))
    {
        echo "Syntax error\n";
        exit;
    }
    if (isset($num) && isset($num2))
    {
        if ($op == '+')
            echo ($num + $num2) . "\n";
        else if ($op == '-')
            echo ($num - $num2) . "\n";
        else if ($op == '/' && $argv[3] != "0")
            echo ($num / $num2) . "\n";
        else if ($op == '*')
            echo ($num * $num2) . "\n";
        else if ($op == '%' && $argv[3] != "0")
            echo ($num % $num2) . "\n";
    }
}
else
    echo "Incorrect Paramaters\n";