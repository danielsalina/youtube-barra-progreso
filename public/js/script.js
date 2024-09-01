// Función para actualizar la barra de progreso
function actualizarProgreso() {
  fetch('../progress.php')
    .then((response) => response.json())
    .then((data) => {
      const progreso = data.progreso;
      const barra = document.getElementById('barra-progreso');

      barra.style.width = progreso + '%';
      barra.setAttribute('aria-valuenow', progreso);
      barra.textContent = progreso + '%';

      // Si el progreso es menor a 100%, continuar actualizando
      if (progreso < 100) {
        setTimeout(actualizarProgreso, 1000); // Esperar 1 segundo antes de la siguiente actualización
      } else {
        // Mostrar una alerta cuando se completa el progreso
        let alert = `<div class="alert alert-success mt-5" role="alert">¡Proceso completado!</div>`;
        setTimeout(() => {
          document.getElementById('alert').innerHTML = alert;
        }, 1000);
      }
    })
    .catch((error) => console.error('Error:', error));
}

// Evento para el botón "Iniciar Proceso"
document.getElementById('iniciar').addEventListener('click', function () {
  actualizarProgreso();
});
