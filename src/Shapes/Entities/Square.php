<?php

namespace Shapes\Entities;

use Shapes\Interfaces\Shape;

/**
 * Class Square
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Square implements Shape
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
}
