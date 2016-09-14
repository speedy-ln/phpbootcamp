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
    $i++;
}
$sentence = epur_str($sentence);
$array = ft_split($sentence);
$char = array();
$number = array();
$special = array();
$i = 0;
while ($array[$i])
{
    $array[$i] = trim($array[$i]);
    if (ctype_alpha($array[$i]))
        $char[count($char)] = $array[$i];
    else if (ctype_digit($array[$i]))
        $number[count($number)] = $array[$i];
    else
        $special[count($special)] = $array[$i];
    $i++;
}
usort($char, 'strnatcasecmp');
rsort($number);
sort($special);
$array = array_merge($char, $number, $special);
$i = 0;
while ($array[$i])
{
    echo $array[$i]."\n";
    $i++;
}