//CONSUMIENDO SPOTIFY
//endpoint del API en variable
let url = "https://api.spotify.com/v1/artists/5KBPxIED8ejHkvhs4KCzyS/top-tracks?market=US"

//let token = "Bearer BQAgIEY3fH8aww877ktK2hH2S2RVR3xhKP5pNuYNPceyhR2lyPkqEi-SZS4y02mGWCTXZtQxQ3PoYIJ8SYDF2gnmX135tR8PCCs0Nh-InRQwxyL-igyPz13QGMRAvMc0QLFvHaYO9Y5XkiTWqtJ4TKWQ8vsivhU"

//herramientas para generar el token de acceso
let urlToken = "https://accounts.spotify.com/api/token"
let grantType = "grant_type=client_credentials"
let clientId = "client_id=01fc56f18fb94b33804b64008baeff9f"
let clientSecret = "client_secret=1567e74cfd4d40b3800dca1a74f00848"

let parametrosToken = {
    method: "POST",
    headers: {
        "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `${grantType}&${clientId}&${clientSecret}`
}

fetch(urlToken, parametrosToken)
    .then(respuesta => respuesta.json())
    .then(datos => obtenerToken(datos));


function obtenerToken(datos) {
    let token = datos.token_type + " " + datos.access_token
    traerCanciones(token)

}

function traerCanciones(token) {
    let parametros = {
        method: "GET",
        headers: {
            Authorization: token
        }
    };
    fetch(url, parametros)
        .then(respuesta => respuesta.json())
        .then(datos => mostrarCanciones(datos));
}


function mostrarCanciones(datos) {
    for (let i = 0; i < datos.tracks.length; i++) {
        document.getElementById("fila").innerHTML += `<div class="col-md-4 mb-5" id="columna${i}"></div>`
        document.getElementById(`columna${i}`).innerHTML += `<h4 id="titulo${i}" class="text-center text-primary">${datos.tracks[i].name}</h4>`
        document.getElementById(`columna${i}`).innerHTML += `<p class="text-center"><img src="${datos.tracks[i].album.images[0].url}" alt="imagen ${datos.tracks[i].name}" id="imagen${i}" class="w-100"></p>`
        document.getElementById(`columna${i}`).innerHTML += `<p class="text-center mt-3"><audio src="${datos.tracks[i].preview_url}" controls id="audio${i}" class="w-100"></audio></p>`
    }
}
