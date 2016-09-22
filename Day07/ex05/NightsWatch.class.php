<?php

class NightsWatch
{

    private $str = "";

    function recruit($obj)
    {
        $im = class_implements(get_class($obj));
        if (array_key_exists('IFighter', $im))
        {
            $this->str = $this->str . $obj::fight();
        }
    }

    function fight()
    {
        echo $this->str;
    }
}