<?php


class Square implements Colorable
{

    protected $edge;

    public function __construct($edge)
    {
        $this->edge = $edge;
    }

    /**
     * @return mixed
     */
    public function getEdge()
    {
        return $this->edge;
    }

    /**
     * @param mixed $edge
     */
    public function setEdge($edge)
    {
        $this->edge = $edge;
    }

    public function getArea()
    {
        return $this->getEdge() * $this->getEdge();
    }

    public function howToColor()
    {
        // TODO: Implement howToColor() method.
        return "Color all four sides";
    }
}