<?php 

for ($i = 0; $i < 20; $i++) {
    // Ignorar una iteración
    if(($i === 6) || ($i === 14)) {
        continue;
    }

    echo ($i + 1) . "<br>";
}

echo "Saliste del bucle";
