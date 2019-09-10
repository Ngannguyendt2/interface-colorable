<?php


class Circle
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return (pi() * pow($this->radius, 2));
    }

    function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

}