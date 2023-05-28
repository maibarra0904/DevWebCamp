<?php

namespace Controllers;

use MVC\Router;

class DashboardController {
    public static function index(Router $router) {
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // }

        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administración',
        ]);
       
    }
    
}