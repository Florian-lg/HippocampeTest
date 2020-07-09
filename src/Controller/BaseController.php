<?php

namespace App\Controller;


class BaseController
{
   public function getEntityManager()
   {
       return require_once __DIR__ . "/../../bootstrap.php";
   }
}