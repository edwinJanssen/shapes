<?php

namespace Shapes\Entities;

use Shapes\Interfaces\DBConnection;

/**
 * Class AbstractRepository
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
abstract class AbstractRepository
{
    /**
     * @var DBConnection
     */
    protected $db;

    /**
     * CircleRepository constructor.
     *
     * @param DBConnection $db
     * @param bool         $debug
     */
    public function __construct(DBConnection $db, $debug = false)
    {
        $this->db = $db;
        $this->db->connect();
    }
}
