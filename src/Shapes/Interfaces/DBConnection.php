<?php

namespace Shapes\Interfaces;

/**
 * Interface DBConnection
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Interfaces
 */
interface DBConnection
{
    /**
     * connect to database
     *
     * @author Edwin Janssen
     *
     * @return void
     */
    public function connect();
}
