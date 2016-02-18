<?php

namespace Shapes\Entities;

/**
 * Class Square
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class Square
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
}
