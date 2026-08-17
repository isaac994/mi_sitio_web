  const boton = document.querySelector("#btnHorario");
const texto = document.querySelector("#textoHorario");

boton.addEventListener("click", function () {
    if (texto.style.display === "none") {
        texto.style.display = "block";
        boton.textContent = "Ocultar horario";
    } else {
        texto.style.display = "none";
        boton.textContent = "Ver horario";
    }
});