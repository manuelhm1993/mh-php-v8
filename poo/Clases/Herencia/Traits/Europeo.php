<?php

// Los traits son un mecanispo para suplir la herencia simple de php y agregan comportamientos extra a las clases
trait Europeo {
    // Al igual que las clases abstractas y las interfaces, los trais no se instancian, sirven para extender en funcionalidad una clase
    public function saludoEuropeo(): void {
        echo "Este es un saludo europeo";
    }
}
