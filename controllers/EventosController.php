<?php

namespace Controllers;

use MVC\Router;

class EventosController {
    public static function index(Router $router) {
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // }

        $router->render('admin/eventos/index', [
            'titulo' => 'Eventos',
        ]);
       
    }
    
}