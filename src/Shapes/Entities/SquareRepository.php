<?php

namespace Shapes\Entities;

/**
 * Class SquareRepository
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class SquareRepository extends AbstractRepository
{
    /**
     * Get squares from database
     *
     * @author Edwin Janssen
     *
     * @return Square[]
     */
    public function getSquares()
    {
        $squares = [];
        $sql     = 'SELECT id, length
                    FROM square;';
        $rst     = $this->db->Execute($sql);

        if ($rst && !$rst->EOF) {
            while (!$rst->EOF) {
                $squares[] = new Square((float)$rst->fields['length']);
                $rst->moveNext();
            }
        }

        return $squares;
    }
}
