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
     * Get output for required area
     *
     * @author Edwin Janssen
     *
     * @return string
     */
    public function output()
    {
        return sprintf('<h1>Sum of the areas of provided shapes: %s</h1>', $this->sum());
    }

    /**
     * Sum shape areas
     *
     * @author Edwin Janssen
     *
     * @return number
     */
    private function sum()
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
