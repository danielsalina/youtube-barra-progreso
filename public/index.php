<?php
// Iniciar la sesión para resetear el progreso si es necesario
session_start();
// Opcional: Reiniciar el progreso si se accede con el parámetro reset
if (isset($_GET['reset'])) {
    $_SESSION['progreso'] = 0;
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Progreso Dinámico con PHP y Bootstrap</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    </style>
</head>
<body class="bg-dark">
<div class="progress-container">
    <h2 class="mb-4 text-center text-secondary">Progreso de la Tarea</h2>
    <div class="progress" style="height: 30px;">
        <div id="barra-progreso" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <div class="mt-4 text-center">
        <button id="iniciar" class="btn btn-primary">Iniciar Proceso</button>
        <a href="index.php?reset=1" class="btn btn-secondary">Reiniciar Progreso</a>
        <div id="alert" class="mt-5"></div>
    </div>
</div>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>
