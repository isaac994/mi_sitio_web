const mensaje = document.querySelector("#mensaje");
const boton = document.querySelector("#btn-confirmar");

function mostrarMensaje() {
    mensaje.textContent = "Solicitud recibida - te atiende Isaac Mico Serna";
    mensaje.classList.remove("oculto");
}

boton.addEventListener("click", mostrarMensaje);