<?php

namespace Lib;

class Route {
    // Propiedad para almacenar las URLs válidas de la aplicación
    private static array $routes = [];

    // Registra las rutas de tipo GET
    public static function get(string $uri, callable $callback): void {
        self::$routes['GET'][$uri] = $callback;
    }

    // Registra las rutas de tipo POST
    public static function post(string $uri, callable $callback): void {
        self::$routes['POST'][$uri] = $callback;
    }
}
