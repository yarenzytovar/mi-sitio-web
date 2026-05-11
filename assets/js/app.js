const botonModo = document.getElementById('modo');

const botonMensaje = document.getElementById('mensaje');

const texto = document.getElementById('texto');

botonModo.addEventListener('click', () => {
  document.body.classList.toggle('dark');
});

botonMensaje.addEventListener('click', () => {
  let tecnologias = ['HTML', 'CSS', 'JavaScript'];

  let contenido = '';

  for (let i = 0; i < tecnologias.length; i++) {
    contenido += tecnologias[i] + ' ';
  }

  texto.innerHTML = 'Tecnologías utilizadas: ' + contenido;
});
