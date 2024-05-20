<?php

class Controller {
    public function calculateArea($base, $height) {
        //le lelgan las variables base y heigt que se asignaron en index
        // Validar datos de entrada
        if (!is_numeric($base) || !is_numeric($height)) {
            return "Error: La base y la altura deben ser números.";
        }

        // Lógica para calcular el área del triángulo
        $area = 0.5 * $base * $height;
        return $area;
    }

    public function redirectWithResult($result) {
        // Redirigir a la vista con los resultados
        $encodedResult = urlencode($result);
        header("Location: /views/triangle_view.php?result={$encodedResult}");
        exit();
    }
}
?>
