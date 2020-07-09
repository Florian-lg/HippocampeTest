<?php

namespace App\Controller;

use App\Entity\Company;

class CompanyController extends BaseController
{
    /**
     * @return void
     */
    public function indexAction()
    {
        $entityManager = $this->getEntityManager();
        $companyRepository = $entityManager->getRepository('App\Entity\Company');
        $companies = $companyRepository->findAll();

        include __DIR__ . '/../../views/templates/companies/company.index.phtml';
    }

    /**
     * @param integer $id
     * @return void
     */
    public function showAction($id)
    {
        $entityManager = $this->getEntityManager();
        $companyRepository = $entityManager->getRepository('App\Entity\Company');
        $company = $companyRepository->find($id);

        include __DIR__ . '/../../views/templates/companies/company.show.phtml';
    }
}