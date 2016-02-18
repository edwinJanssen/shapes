<?php

namespace Shapes\Entities;

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
     * @var \ADOConnection
     */
    protected $db;

    /**
     * CircleRepository constructor.
     *
     * @param bool $debug
     */
    public function __construct($debug = false)
    {
        // setup db connection
        $this->db = ADONewConnection('mysqli');
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
        $this->db->NConnect(
            'localhost',
            'root',
            '',
            'shapes'
        );
        if (!$this->db->IsConnected()) {
            die("Cannot connect to shapes database, please warn the administrator");
        }
        $this->db->Execute("SET NAMES 'utf8'");
        $this->db->debug = $debug;

    }
}
