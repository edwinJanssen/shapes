<?php

namespace Shapes\Entities;

/**
 * Class CircleRepository
 *
 * @author  Edwin Janssen
 *
 * @package Shapes\Entities
 */
class CircleRepository extends AbstractRepository
{

    /**
     * Get circles from db
     *
     * @author Edwin Janssen
     *
     * @return Circle[]
     */
    public function getCircles()
    {
        // Get circles
        $circles = [];
        $sql     = 'SELECT id, radius
                    FROM circle;';
        $rst     = $this->db->Execute($sql);

        if ($rst && !$rst->EOF) {
            while (!$rst->EOF) {
                $circles[] = new Circle((float)$rst->fields['radius']);

                $rst->moveNext();
            }
        }

        return $circles;
    }
}
