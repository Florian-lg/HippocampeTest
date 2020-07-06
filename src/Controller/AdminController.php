<?php

namespace App\Controller;

class AdminController extends BaseController
{

    public function indexAction()
    {
        include $this->templateFolder . 'admin.html';
    }
}