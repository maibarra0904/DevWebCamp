<?php

namespace Controllers;

use MVC\Router;

class PonentesController {
    public static function index(Router $router) {
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // }

        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes/Conferencistas',
        ]);
       
    }
    
}