<?php

class Lannister
{
    function sleepWith($class)
    {
        $name = get_class($this);
        $partner = get_class($class);
        if ($name == "Tyrion" && $partner == "Jaime")
            $print = 1;
        if ($name == "Tyrion" && $partner == "Sansa")
            $print = 2;
        if ($name == "Tyrion" && $partner == "Cersei")
            $print = 1;
        if ($name == "Jaime" && $partner == "Tyrion")
            $print = 1;
        if ($name == "Jaime" && $partner == "Cersei")
            $print = 3;
        if ($name == "Jaime" && $partner == "Sansa")
            $print = 2;

        if (isset($print))
            switch ($print)
            {
                case 1:
                    echo "Not even if i'm drunk !".PHP_EOL;
                    break;
                case 2:
                    echo "Let's do this.".PHP_EOL;
                    break;
                case 3:
                    echo "With pleasure, but only in a tower in Winterfell, then.".PHP_EOL;
                    break;
            }
    }

}