<?php

namespace Pg\GsbFraisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TablettesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TablettesRepository extends EntityRepository
{
	public function testsql()
    {
        $rawSql = "SELECT * FROM tablettes";
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);

        return $stmt->fetchAll();

    }
}
