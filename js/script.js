// 1. Seleccionamos el botón por su ID 'gameButton'
const gameBtn = document.getElementById('gameButton');

// 2. Creamos la función que se ejecutará al hacer clic
function redirectToGame() {
    // 3. Redirigimos a la página del juego
    window.location.href = "https://krunker.io/";
}

// 4. Añadimos el 'event listener' para que la función se llame en el evento 'click'
gameBtn.addEventListener("click", redirectToGame);

const loginBtn = document.getElementById('loginbutton');

function redirectToLogin() {
    window.location.href = "login.html";
}

loginBtn.addEventListener("click", redirectToLogin);
