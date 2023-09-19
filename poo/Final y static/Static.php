<?php

class Humano {
    private static string $nombre = "Manuel Henriquez";

    public static function saludar(): void {
        echo "Hola mundo";
    }

    public static function getNombre(): string {
        return self::$nombre;
    }
}