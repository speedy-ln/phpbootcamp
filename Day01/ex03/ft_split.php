<?php
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