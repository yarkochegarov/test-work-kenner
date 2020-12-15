<?php

abstract class Robot
{
    protected $weight;
    protected $speed;
    protected $height;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
}
