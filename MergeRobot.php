<?php

require_once 'Robot.php';

class MergeRobot extends Robot
{
    /**
     * @var Robot[]
     */
    private $robots = array();

    /**
     * @param $robots
     * @return $this
     */
    public function addRobot($robots)
    {
        if(!is_array($robots)){
            $robots = [$robots];
        }
        $this->robots = array_merge($this->robots, $robots);

        return $this;
    }

    /**
     * @return double
     */
    public function getHeight()
    {
        return array_reduce($this->robots, function ($carry, $item){
            $carry += $item->getHeight();
            return $carry;
        });
    }

    /**
     * @return double
     */
    public function getSpeed()
    {
        return array_reduce($this->robots, function($lowest, $company) {
            return $lowest === null || $company->getSpeed() < $lowest->getSpeed() ?
                $company : $lowest;
        })->getSpeed();
    }

    /**
     * @return double
     */
    public function getWeight()
    {
        return array_reduce($this->robots, function ($carry, $item){
            $carry += $item->getWeight();
            return $carry;
        });
    }
}
