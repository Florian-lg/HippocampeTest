<?php

namespace App\Controller;

class EmployeeController extends BaseController
{
    /**
     * @return void
     */
    public function indexAction()
    {
        $entityManager = $this->getEntityManager();
        $companyRepository = $entityManager->getRepository('App\Entity\Employee');
        $employees = $companyRepository->findAll();
        $employeesAge = [];
        
        foreach ($employees as $employee) {
            $age = $employee->getAge();
            if($age < 20) {
                $employeesAge['<20'][] = $age;
            } elseif ($age >= 20 && $age < 30) {
                $employeesAge['20-30'][] = $age;
            } elseif ($age >= 30 && $age < 40) {
                $employeesAge['30-40'][] = $age;
            } elseif ($age >= 40 && $age < 50) {
                $employeesAge['40-50'][] = $age;
            } else {
                $employeesAge['>50'][] = $age;
            }
        }

        $employeesAge = json_encode($employeesAge);

        include __DIR__ . '/../../views/templates/employees/employee.index.phtml';
    }

    /**
     * @param integer $id
     * @return void
     */
    public function showAction($id)
    {
        $entityManager = $this->getEntityManager();
        $companyRepository = $entityManager->getRepository('App\Entity\Employee');
        $employee = $companyRepository->find($id);

        include __DIR__ . '/../../views/templates/employees/employee.show.phtml';
    }
}