<?php

class UnholyFactory
{
    private $_absorbed = array();
    private $_fabricated = array();

    public function absorb($class)
    {
        $class_name = get_class($class);
        if (!key_exists($class_name, $this->_absorbed))
        {
            if (method_exists($class, "isFighter"))
            {
                $this->_absorbed[$class_name] = $class;
                print("(Factory absorbed a fighter of type " . $class->getFighter() . ")" . PHP_EOL);
            }
            else
                print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
        }
        else
        {
            print("(Factory already absorbed a fighter of type " . $class->getFighter() . ")" . PHP_EOL);
        }
    }

    private function checkAbsorption($absorbed)
    {
        foreach ($this->_absorbed as $key=> $value)
        {
            if($value->getFighter() == $absorbed)
                return $key;
        }
        return false;
    }

    public function fabricate($rf)
    {
        $class = $this->checkAbsorption($rf);
//        $class = array_search($rf, $this->_absorbed->getFighter());
        if ($class === false)
        {
            print("(Factory hasn't absorbed any fighter of type $rf)".PHP_EOL);
            return null;
        }
        else
        {
            $this->_fabricated[] = $rf;
            print("(Factory fabricates a fighter of type $rf)".PHP_EOL);
            return $this->_absorbed[$class];
        }
    }
}