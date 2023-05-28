<?php

namespace Controllers;

use MVC\Router;

class RegalosController {
    public static function index(Router $router) {
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // }

        $router->render('admin/regalos/index', [
            'titulo' => 'Regalos',
        ]);
       
    }
    
}