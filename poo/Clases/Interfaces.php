<?php

// Declaración de una interfaz, es un modelo a seguir para el diseño de una clase
interface iTemplate {
    public function setVariable(string $name): void;
    public function getHtml(): string;
}

// Implementar una interfaz, se deben definir todos los métodos de la misma
class Template implements iTemplate {
    public function setVariable(string $name): void {
        
    }

    public function getHtml(): string {
        return "";
    }
}