<?php

namespace Shapes\Services;

use Shapes\Exceptions\AreaCalculatorInvalidShapeException;
use Shapes\Interfaces\Shape;

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
     * @var Shape[]
     */
    private $shapes;

    /**
     * AreaCalculator constructor.
     *
     * @param Shape[] $shapes
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
            if ($shape instanceof Shape) {
                $areas[] = $shape->getArea();

                continue;
            }

            throw new AreaCalculatorInvalidShapeException();
        }

        return array_sum($areas);
    }
}
