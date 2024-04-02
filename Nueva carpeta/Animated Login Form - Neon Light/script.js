function mostrarDescripcion(imagen, descripcion) {
    // Guardar la información en el sessionStorage
    sessionStorage.setItem('imagen', imagen);
    sessionStorage.setItem('descripcion', descripcion);
    // Redireccionar a la página de descripción
    window.location.href = 'descripcion.html';
}

function volver() {
    // Redireccionar de vuelta a la página principal
    window.location.href = 'index.html';
}
