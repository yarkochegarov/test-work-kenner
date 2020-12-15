<?php

require_once 'Robot.php';

class Robot1 extends Robot
{
    public function __construct()
    {
        $this->weight = 10.1;
        $this->speed = 10.1;
        $this->height = 10.1;
    }
}
