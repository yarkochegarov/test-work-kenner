<?php

require_once 'Robot.php';

class Robot1 extends Robot
{
    public function __construct()
    {
        $this->weight = 10;
        $this->speed = 10;
        $this->height = 10;
    }
}
