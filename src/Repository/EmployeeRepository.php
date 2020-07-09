<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class EmployeeRepository extends EntityRepository
{
    public function findEmployeesAge()
    {
        require_once __DIR__ . "/../../bootstrap.php";

        $queryBuilder = $entityManager->createQueryBuilder();
        $queryBuilder
            ->select('age')
            ->from('employees', 'e');
    }
}