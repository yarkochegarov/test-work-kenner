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
     * for test
     * @todo delete
     */
    public function showResult()
    {
        var_dump($this->robots);
    }
}
