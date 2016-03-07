<?php

namespace Shapes\Entities;

use Shapes\Interfaces\ManageShape;
use Shapes\Interfaces\Shape;

/**
 * Class Square
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Square implements Shape, ManageShape
{
    /**
     * @var float
     */
    private $length;

    /**
     * Square constructor.
     *
     * @param float $length
     */
    public function __construct($length)
    {
        $this->setLength($length);
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * Calculate the area for a square
     *
     * @author Edwin Janssen
     *
     * @return number
     */
    public function getArea() {
        return pow($this->getLength(), 2);
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
