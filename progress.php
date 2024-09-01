<?php
// Iniciar la sesión para mantener el estado del progreso
session_start();

// Inicializar el progreso si no está establecido
if (!isset($_SESSION['progreso'])) {
    $_SESSION['progreso'] = 0;
}

// Aumentar el progreso en etapas de 25%
if ($_SESSION['progreso'] < 25) {
    $_SESSION['progreso'] = 25;
} elseif ($_SESSION['progreso'] < 50) {
    $_SESSION['progreso'] = 50;
} elseif ($_SESSION['progreso'] < 75) {
    $_SESSION['progreso'] = 75;
} elseif ($_SESSION['progreso'] < 100) {
    $_SESSION['progreso'] = 100;
}

// Devolver el progreso en formato JSON
echo json_encode(['progreso' => $_SESSION['progreso']]);
