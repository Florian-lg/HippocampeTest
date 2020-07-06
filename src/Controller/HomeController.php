<?php

namespace App\Controller;

class HomeController extends BaseController
{
    public function indexAction()
    {
        include $this->templateFolder . 'home.html';
    }
}