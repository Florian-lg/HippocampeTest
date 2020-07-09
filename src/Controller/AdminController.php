<?php

namespace App\Controller;

class AdminController extends BaseController
{
    /**
     * @return void
     */
    public function indexAction()
    {
        include __DIR__ . '/../../views/templates/admin.phtml';
    }
}