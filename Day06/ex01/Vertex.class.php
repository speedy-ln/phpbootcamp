<?php
require_once 'Color.class.php';
class Vertex
{
    private $_x = 0;
    private $_y = 0;
    private $_z = 0;
    private $_w = 1.0;
    private $_color;
    static $verbose = false;

    public function __construct($array)
    {
        if (array_key_exists('x', $array) && array_key_exists('y', $array) && array_key_exists('z', $array))
        {
            if (!array_key_exists('w', $array))
                $this->_w = 1.0;
            else
                $this->_w = $array['w'];
            if (!array_key_exists('color', $array))
                $this->setColor(new Color( array('red' => 255, 'green' => 255, 'blue' => 255)));
            else
                $this->setColor($array['color']);
            $this->_x = $array['x'];
            $this->_y = $array['y'];
            $this->_z = $array['z'];
        }
        if (self::$verbose == True) {
            echo sprintf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, ', $this->_x, $this->_y, $this->_z, $this->_w) . $this->_color . " ) constructed". PHP_EOL;
        }
    }

    function __toString()
    {
        return (sprintf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, ', $this->_x, $this->_y, $this->_z, $this->_w) . $this->_color) . " )";
    }

    static function doc () {
        $str = file_get_contents('Vertex.doc.txt');
        return ($str);
    }

    function __destruct()
    {
        if (self::$verbose == True) {
            echo sprintf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f', $this->_x, $this->_y, $this->_z, $this->_w) . $this->_color . " ) destructed". PHP_EOL;
        }
    }

    public function getX() { return ($this->_x); }
    public function getY() { return ($this->_y); }
    public function getZ() { return ($this->_z); }
    public function getW() { return ($this->_w); }
    public function getColor() { return ($this->_color); }

    public function setX($x) { $this->_x = $x; }
    public function setY($y) { $this->_y = $y; }
    public function setZ($z) { $this->_z = $z; }
    public function setW($w) { $this->_w = $w; }
    public function setColor(Color $color) { $this->_color = $color; }


}
?>