<?php

namespace Shapes\Services;

use Shapes\Entities\Circle;
use Shapes\Entities\Square;

/**
 * Class AreaCalculator
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Services
 */
class AreaCalculator
{
    /**
     * @var array
     */
    private $shapes;

    /**
     * AreaCalculator constructor.
     *
     * @param array $shapes
     */
    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    /**
     * Sum shape areas
     *
     * @author Edwin Janssen
     *
     * @return number
     */
    public function sum()
    {
        $areas = [];

        foreach ($this->shapes as $shape) {
            if ($shape instanceof Square) {
                $areas[] = pow($shape->getLength(), 2);
            } elseif ($shape instanceof Circle) {
                $areas[] = pi() * pow($shape->getRadius(), 2);
            }
        }

        return array_sum($areas);
    }
}
