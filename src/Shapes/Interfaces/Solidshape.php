<?php

namespace Shapes\Interfaces;

/**
 * Interface SolidShape
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Interfaces
 */
interface SolidShape
{
    /**
     * Calculate volume for shape
     *
     * @author Edwin Janssen
     *
     * @return number
     */
    public function getVolume();
}
