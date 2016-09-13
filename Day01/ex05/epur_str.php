<?php
if (isset($argv[1]))
{
    $i = 0;
    $words = preg_split('/\s+/', $argv[1]);
    $sentence = "";
    while ($words[$i])
    {
        $sentence .= $words[$i]." ";
        $i++;
    }
    $sentence = trim($sentence);
    echo $sentence."\n";
}