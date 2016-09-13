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

if (isset($argv[1]))
{
    $sentence = epur_str($argv[1]);
    $array = explode(" ", $sentence);
    $new_sentence = "";
    $i = 1;
    while ($array[$i])
    {
        $new_sentence .= $array[$i]." ";
        $i++;
    }
    $new_sentence .= $array[0];
    $new_sentence = trim($new_sentence);
    echo $new_sentence."\n";
}