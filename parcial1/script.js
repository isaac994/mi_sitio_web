const boton = document.querySelector("#btnEnviar");
const mensaje = document.querySelector("#mensaje");

boton.addEventListener("click", function () {
    mensaje.textContent = " Isaac Mico Serna";
    mensaje.classList.remove("oculto");
});