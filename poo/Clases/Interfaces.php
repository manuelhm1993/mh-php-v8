<?php

// Interfaz padre
interface iA {
    public function prueba();
}

// Interfaz que hereda de la interfaz iA
interface iB extends iA {
    public function prueba2();
}

// Clase que implementa la interfaz iB, debe definir todos los métodos de iB e iA
class C implements iB {
    public function prueba() {}
    public function prueba2() {}
}
