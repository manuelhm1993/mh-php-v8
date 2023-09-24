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
        $uri = self::clearUri($uri);

        self::$routes['GET'][$uri] = $callback;
    }

    /**
     * Registra las rutas de tipo POST
     */
    public static function post(string $uri, callable $callback): void {
        $uri = self::clearUri($uri);
        
        self::$routes['POST'][$uri] = $callback;
    }

    public static function dispatch(): void {
        $uri    = $_SERVER["REQUEST_URI"]; // Recuperar la url de la petición actual
        $method = $_SERVER["REQUEST_METHOD"]; // Rescatar el verbo http de la petición

        $uri = self::clearUri($uri);

        // Iterar las rutas registradas en el verbo http de la petición
        foreach (self::$routes[$method] as $route => $callback) {
            // Si la url de la petición coincide con una ruta, se ejecuta su callback y sale de la función
            if ($route === $uri) {
                $callback();
                return;
            }
        }

        // Si la url de la petición no es encontrada, se emite un mensaje de error;
        echo "404 | La ruta $uri no existe";
    }
}
