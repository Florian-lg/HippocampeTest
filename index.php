<?php

use App\Controller\AdminController;
use App\Controller\HomeController;

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_GET['r'])) {
    $route = $_GET['r'];

    switch ($route) {
        case 'admin':
            (new AdminController())->indexAction();
            break;
        case 'home':
            (new HomeController())->indexAction();
            break;
    }
    
}
