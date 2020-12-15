<?php

class FactoryRobot
{
    /**
     * array of factory types
     * @var Robot[]
     */
    private $types = array();

    /**
     * add new type for factory
     * @param Robot $robot
     * @return bool
     */
    public function addType(Robot $robot): bool
    {
        if(!in_array($robot, $this->types)){
            $this->types[] = $robot;
            return true;
        }

        return false;
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'create') !== false) {
            $name = str_replace("create", "", $name);
            $res = array();
            $isFound = false;
            foreach ($this->types as $type){
                if(get_class($type) == $name){
                    $isFound = true;
                    $i = 0;
                    $quantity = isset($arguments[0]) ? $arguments[0] : 1;
                    while($i < $quantity){
                        $res[] = clone $type;
                        $i++;
                    }
                    break;
                }
            }
            if($isFound == true){
                return $res;
            }
        }

        throw new BadMethodCallException('Call to undefined method');
    }

    /**
     * for test
     * @todo delete
     */
    public function showResult()
    {
        var_dump($this->types);
    }
}
