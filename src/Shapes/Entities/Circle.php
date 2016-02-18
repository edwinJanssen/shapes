<?php

namespace Shapes\Entities;

/**
 * Class Circle
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Circle
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
}
