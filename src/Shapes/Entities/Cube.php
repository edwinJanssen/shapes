<?php

namespace Shapes\Entities;

use Shapes\Interfaces\Shape;
use Shapes\Interfaces\SolidShape;

/**
 * Class Cube
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Cube extends Square implements Shape, SolidShape
{
    /**
     * Calculate volume for shape
     *
     * @author Edwin Janssen
     *
     * @return number
     */
    public function getVolume()
    {
        return pow($this->getLength(), 3);
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
        return $this->getArea() + $this->getVolume();
    }
}
