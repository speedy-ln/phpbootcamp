<?php

class Fighter
{
    private $fighter;

    public function __construct($fighter)
    {
//        $soldier = get_class($this);
        $this->fighter = $fighter;
    }

    public function isFighter()
    {
        return True;
    }

    public function getFighter()
    {
        return $this->fighter;
    }


}