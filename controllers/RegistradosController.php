<?php

namespace Controllers;

use MVC\Router;

class RegistradosController {
    public static function index(Router $router) {
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // }

        $router->render('admin/registrados/index', [
            'titulo' => 'Participantes',
        ]);
       
    }
    
}