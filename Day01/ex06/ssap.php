<?php

function epur_str($str)
{
    $i = 0;
    $words = preg_split('/\s+/', $str);
    $sentence = "";
    while ($words[$i])
    {
        $sentence .= $words[$i]." ";
        $i++;
    }
    return (trim($sentence));
}

function ft_split($str)
{
    $i = 0;
    $array = array();
    $exploded = explode(" ", $str);
    while ($exploded[$i])
    {
        if ($exploded[$i] != " " || $exploded[$i] != "")
            $array[] = $exploded[$i];
        $i++;
    }
    sort($array);
    return ($array);
}

$i = 1;
$sentence = "";
while (isset($argv[$i]))
{
    $sentence .= $argv[$i]." ";
//    $array[] = ft_split(epur_str($argv[$i]));
    $i++;
}
$sentence = epur_str($sentence);
$array = ft_split($sentence);
$i = 0;
while ($array[$i])
{
    echo $array[$i]."\n";
    $i++;
}