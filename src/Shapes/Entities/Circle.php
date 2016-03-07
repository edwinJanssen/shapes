<?php

namespace Shapes\Entities;

use Shapes\Interfaces\ManageShape;
use Shapes\Interfaces\Shape;

/**
 * Class Circle
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Circle implements Shape, ManageShape
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

    /**
     * Calculate
     *
     * @author Edwin Janssen
     *
     * @return number
     */
    public function calculate()
    {
        return $this->getArea();
    }
}
