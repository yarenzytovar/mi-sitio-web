function mostrarMensaje() {
  alert('Bienvenida al sitio web');
}

function validarFormulario() {
  const nombre = document.getElementById('nombre').value;

  if (nombre === '') {
    alert('Por favor ingresa tu nombre');
    return false;
  }
  return true;
}
