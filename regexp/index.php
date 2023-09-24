<?php

// $url = 'youtu.be/xGaXH7spCyA?si=ttFBCojtll02odCd';
$url = 'https://www.youtube.com/watch?v=xGaXH7spCyA&list=PLZ2ovOgdI-kUSqWuyoGJMZL6xldXw6hIg&index=40';

// Usar los '#' como delimitadores ya que se está trabajando con http:// y habría que escaparlos
$pattern = "#^(?:htt(?:p|ps)://)?(?:www\.)?(?:youtu\.be/|youtube\.com/watch\?v=)(\w+)#i";

// Recuperar los subpatrones con matches
if (preg_match($pattern, $url, $matches)) {
    echo "La url es válida: id - {$matches[1]}";
    // var_dump($matches);
} 
else {
    echo "La url no es válida";
}
