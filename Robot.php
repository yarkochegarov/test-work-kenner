<?php

abstract class Robot
{
    protected $height;
    protected $speed;
    protected $weight;

    /**
     * @param $height
     * @return Robot
     */
    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return double|int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $speed
     * @return Robot
     */
    public function setSpeed($speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * @return double|int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param $weight
     * @return Robot
     */
    public function setWeight($weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return double|int
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
