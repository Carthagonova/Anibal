const formulario = document.querySelector(".formulario"),
    messages = document.querySelector("#messages");
function displaySuccessMessage(e) {
    let s = document.createElement("div");
    s.classList.add("message", "success"),
        (s.innerText = e),
        (messages.innerHTML = ""),
        messages.appendChild(s),
        setTimeout(() => {
            s.remove();
        }, 5e3);
    let r = document.querySelector(".message.error");
    r && r.remove();
}
function displayErrorMessage(e) {
    let s = document.createElement("div");
    s.classList.add("message", "error"),
        (s.innerText = e),
        (messages.innerHTML = ""),
        messages.appendChild(s),
        setTimeout(() => {
            s.remove();
        }, 5e3);
    let r = document.querySelector(".message.success");
    r && r.remove();
}
formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    let t = new FormData(e.target);
    // Construye la URL dinámicamente para adaptarse al dominio actual
    let actionUrl = `${window.location.origin}/wp-content/plugins/Anibal/includes/form/enviar_correo.php`;

    fetch(actionUrl, {
        method: "POST",
        body: t
    })
    .then((e) => e.json())
    .then((e) => {
        "success" === e.status ? displaySuccessMessage(e.message) : displayErrorMessage(e.message);
    })
    .catch((e) => console.error(e));
});