<?php

use App\Controller\AdminController;
use App\Controller\HomeController;
use App\Entity\Employee;
use App\Router;
use App\Router\Router as Routing;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Routing($_GET['url']);

$router->get('/admin', 'Admin::indexAction');

// Employee routes
$router->get('/admin/employee', 'Employee::indexAction');
$router->get('/admin/employee/:id', 'Employee::showAction');

$router->get('/admin/companies', 'Company::indexAction');
$router->get('/admin/companies/company/:id', 'Company::showAction');

$router->run();