<?php

require_once 'Robot.php';

class Robot2 extends Robot
{
    public function __construct()
    {
        $this->weight = 20;
        $this->speed = 20;
        $this->height = 20;
    }
}
