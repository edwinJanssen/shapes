<?php

namespace Shapes\Services;

/**
 * Class AreaOutputter
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Services
 */
class AreaOutputter
{
    /**
     * @var AreaCalculator
     */
    private $areaCalculator;

    /**
     * AreaOutputter constructor.
     *
     * @param AreaCalculator $areaCalculator
     */
    public function __construct(AreaCalculator $areaCalculator)
    {
        $this->areaCalculator = $areaCalculator;
    }

    /**
     * Het HTML response for sum of areas
     *
     * @author Edwin Janssen
     *
     * @return string
     */
    public function getHtml()
    {
        return sprintf('<h1>Sum of the areas of provided shapes: %s</h1>', $this->areaCalculator->sum());
    }

    /**
     * Get json encoded sum of areas
     *
     * @author Edwin Janssen
     *
     * @return string
     */
    public function getJson()
    {
        return json_encode(array('sum' => $this->areaCalculator->sum()));
    }
}
