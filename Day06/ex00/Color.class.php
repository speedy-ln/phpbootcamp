<?php

class Color
{
    static $verbose = false;
    public $red;
    public $green;
    public $blue;

    /**
     * Color constructor.
     * @param array $array
     */
    public function __construct($array)
    {
        if (array_key_exists('rgb', $array))
        {
            $hex = dechex($array['rgb']);
            $hex = str_pad($hex, 6, '0', STR_PAD_LEFT);
            $this->red = (int)hexdec(substr($hex, 0, 2));
            $this->green = (int)hexdec(substr($hex, 2, 2));
            $this->blue = (int)hexdec(substr($hex, 4, 2));
        }
        if (array_key_exists('red', $array) &&
            array_key_exists('blue', $array) &&
            array_key_exists('green', $array))
        {
            $this->red = (int)$array['red'];
            $this->green = (int)$array['green'];
            $this->blue = (int)$array['blue'];
        }
        if (self::$verbose == True)
            echo "Color( red: " . $this->red . ", green: " . $this->green . ", blue: " . $this->blue . " ) constructed." . PHP_EOL;
    }

    function __toString()
    {
        return ("Color( red: " . $this->red . ", green: " . $this->green . ", blue: " . $this->blue . " )");
    }

    function add($instance)
    {
        $array = array('red' => $this->red + $instance->red, 'green' => $this->green + $instance->green, 'blue' => $this->blue + $instance->blue);
        return (new Color($array));
    }

    function sub($instance)
    {
        $array = array('red' => $this->red - $instance->red, 'green' => $this->green - $instance->green, 'blue' => $this->blue - $instance->blue);
        return (new Color($array));
    }

    function mult($multi)
    {
        $array = array('red' => $this->red * $multi, 'green' => $this->green * $multi, 'blue' => $this->blue * $multi);
        return (new Color($array));
    }

    static function doc ()
    {
        return file_get_contents('Color.doc.txt');
    }

    function __destruct()
    {
        if (self::$verbose == True)
            echo "Color( red: " . $this->red . ", green: " . $this->green . ", blue: " . $this->blue . " ) destructed." . PHP_EOL;
    }

}