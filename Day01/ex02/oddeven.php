<?php
echo "Enter a number: ";
while ($line = fgets(STDIN))
{
    $line = trim($line);
    if (is_numeric($line))
    {
        $num = intval($line, 10);
        if ($num % 2 == 0)
        {
            echo "The number $num is even\n";
            echo "Enter a number: ";
        }
        else
        {
            echo "The number $num is odd\n";
            echo "enter a number: ";
        }
    }
    else
    {
        echo "'$line' is not a number\n";
        if (preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/", $line))
            echo "Entrez un nombre: ";
        else
            echo "enter a number: ";
    }
}
echo "\n";