<?php

namespace Shapes\Services;

use Shapes\Exceptions\AreaCalculatorInvalidShapeException;
use Shapes\Interfaces\ManageShape;

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
     * @var ManageShape[]
     */
    private $shapes;

    /**
     * AreaCalculator constructor.
     *
     * @param ManageShape[] $shapes
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
     * @throws AreaCalculatorInvalidShapeException
     */
    public function sum()
    {
        $areas = [];

        foreach ($this->shapes as $shape) {
            if ($shape instanceof ManageShape) {
                $areas[] = $shape->calculate();

                continue;
            }

            throw new AreaCalculatorInvalidShapeException();
        }

        return array_sum($areas);
    }
}
