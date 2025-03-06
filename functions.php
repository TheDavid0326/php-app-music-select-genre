<?php 

declare(strict_types=1); // Deshabilita transformación automática de tipos

function get_data (string $url): array {
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function render_template(string $template, array $data = []):string {
    $templateFile = "templates/" . basename($template) . ".php"; // Basename para evitar inyección de directorios
    if (!file_exists($templateFile)) {
        return "Error: template nor found";
    }
    
    ob_start(); // Inicia el buffer de salida, lo que se imprima a partir de esta línea se almacenará en el buffer
    require($templateFile);
    return ob_get_clean(); // Devuelve el contenido del buffer de salida en un string y lo limpia
}

?>