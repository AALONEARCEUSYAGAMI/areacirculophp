
<?php
require_once __DIR__ . '/controller/Controller.php';
require_once __DIR__ . '/models/Model.php';

$controller = new Controller();

// Lógica de procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $base = isset($_POST['base']) ? floatval($_POST['base']) : 0;
    //verifica si el valor post trae la variable base del formulario  si si la convierte en desimal y la guarda en la variable $base
    $height = isset($_POST['height']) ? floatval($_POST['height']) : 0;
        //verifica igual el valor de heigt si el metodo post la trae si si la convierte en puinto flotante

    // Llamada al controlador para calcular el área 
    $result = $controller->calculateArea($base, $height);

    // Redirigir a la vista con los resultados
    header('Location: views/triangle_view.php?result=' . urlencode($result));
    exit();
} else {
    // Lógica para mostrar el formulario por primera vez
    $base = 0;
    $height = 0;
    include __DIR__ . '/views/triangle_view.php';
}
?>
