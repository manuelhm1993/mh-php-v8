<?php

interface iA {
    public function prueba1();
}

interface iB {
    public function prueba2();
}

// Las interfaces soportan herencia múltiple, las clases no
interface iC extends iA, iB {
    public function prueba3();
}

interface iD {
    public function prueba4();
}

// Se pueden implementar múltiples interfaces separadas por comas
class D implements iC, iD {
    public function prueba1() {}
    public function prueba2() {}
    public function prueba3() {}
    public function prueba4() {}
}
