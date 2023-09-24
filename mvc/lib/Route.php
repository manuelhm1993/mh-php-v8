<?php

namespace Lib;

class Route {
    /**
     * Propiedad para almacenar las URLs válidas de la aplicación
     */
    private static array $routes = [];

    /**
     * Limpia las url quitando espacios y el simbolo '/'
     */
    private static function clearUri(string $uri): string {
        return trim($uri, '/');
    }

    /**
     * Registra las rutas de tipo GET
     */
    public static function get(string $uri, callable $callback): void {
        self::clearUri($uri);
        self::$routes['GET'][$uri] = $callback;
    }

    /**
     * Registra las rutas de tipo POST
     */
    public static function post(string $uri, callable $callback): void {
        self::clearUri($uri);
        self::$routes['POST'][$uri] = $callback;
    }

    public static function dispatch(): void {
        $uri    = $_SERVER["REQUEST_URI"]; // Recuperar la url de la petición actual
        $method = $_SERVER["REQUEST_METHOD"]; // Rescatar el verbo http de la petición

        $uri = self::clearUri($uri);

        echo $uri;
        echo "<br>";
        echo $method;
    }
}
