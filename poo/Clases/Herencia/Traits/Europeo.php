<?php

// Los traits son un mecanispo para suplir la herencia simple de php y agregan comportamientos extra a las clases
trait Europeo {
    public function saludoEuropeo(): void {
        echo "Este es un saludo europeo";
    }
}
