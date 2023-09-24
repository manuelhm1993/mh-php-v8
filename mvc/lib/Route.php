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
        $uri    = $_SERVER["REQUEST_URI"];    // Recuperar la url de la petición actual
        $method = $_SERVER["REQUEST_METHOD"]; // Rescatar el verbo http de la petición

        $uri = self::clearUri($uri);

        // Iterar las rutas registradas en el verbo http de la petición
        foreach (self::$routes[$method] as $route => $callback) {
            if (strpos($route, ':') !== false) {
                // El subpatrón devuelve la coincidencia a la variable matches
                $route = preg_replace('#:[a-z0-9]+#i', '([a-zA-Z0-9]+)', $route);
            }

            // Si la url de la petición coincide con una ruta, se ejecuta su callback y sale de la función
            if (preg_match("#^$route$#", $uri, $matches)) {
                // Obtener las coincidencias del subpatrón sin contar la url, solo los parámetros
                $params = array_slice($matches, 1);

                $response = $callback(...$params);

                // Si la respuesta es un array o un objeto se devuelve codificado para no dar error al imprimir
                if(is_array($response) || is_object($response)) {
                    header('Content-Type: application/json');
                    echo json_encode($response);
                }
                else {
                    echo $response;
                }

                return;
            }
        }

        echo "404 | La ruta $uri no existe";
    }
}
