<?php

namespace Shapes\Entities;

use Shapes\Interfaces\Shape;

/**
 * Class Circle
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Circle implements Shape
{
    /**
     * @var float
     */
    private $radius;

    /**
     * Circle constructor.
     *
     * @param float $radius
     */
    public function __construct($radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Calculate the area for a circle
     *
     * @author Edwin Janssen
     *
     * @return float
     */
    public function getArea()
    {
        return pi() * pow($this->getRadius(), 2);
    }
}
