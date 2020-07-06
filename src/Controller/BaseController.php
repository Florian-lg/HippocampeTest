<?php

namespace App\Controller;

class BaseController
{
    protected $templateFolder;

    public function __construct($templateFolder = __DIR__ . '/../../templates/')
    {
        $this->templateFolder = $templateFolder;
    }
}