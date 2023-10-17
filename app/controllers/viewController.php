<?php namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class viewController
{
    public function home(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/homeView.php';
    }
}

