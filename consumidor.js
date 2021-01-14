//CONSUMIENDO SPOTIFY
//endpoint del API en variable
let url = "https://api.spotify.com/v1/artists/4q3ewBCX7sLwd24euuV69X/top-tracks?market=US"

//let token = "Bearer BQAgIEY3fH8aww877ktK2hH2S2RVR3xhKP5pNuYNPceyhR2lyPkqEi-SZS4y02mGWCTXZtQxQ3PoYIJ8SYDF2gnmX135tR8PCCs0Nh-InRQwxyL-igyPz13QGMRAvMc0QLFvHaYO9Y5XkiTWqtJ4TKWQ8vsivhU"

//herramientas para generar el token de acceso
let urlToken = "https://accounts.spotify.com/api/token"
let grantType = "grant_type=client_credentials"
let clientId = "client_id=01fc56f18fb94b33804b64008baeff9f"
let clientSecret = "client_secret=1567e74cfd4d40b3800dca1a74f00848"

let parametrosToken = {
    method : "POST",
    headers : {
        "Content-Type" : "application/x-www-form-urlencoded"
    },
    body : `${grantType}&${clientId}&${clientSecret}`
}

fetch(urlToken,parametrosToken)
    .then(respuesta=>respuesta.json())
    .then(datos=>obtenerToken(datos));


function obtenerToken(datos){
    let token = datos.token_type+datos.access_token
    traerCanciones(token)
    
}

function traerCanciones(token){
    let parametros = {
        method : "GET",
        headers : {
            Authorization:token
        }
    }
    fetch(url,parametros)
        .then(respuesta=>respuesta.json())
        .then(datos=>mostrarCanciones(datos));
}


function mostrarCanciones(datos){
    let titulo = document.getElementById("titulo")
    let imagen = document.getElementById("imagen")
    let audio = document.getElementById("audio")

    console.log(datos.tracks[0].preview_url)
    console.log(datos.tracks[0].name)
    console.log(datos.tracks[0].album.images[1].url)

    titulo.textContent = datos.tracks[0].name
    imagen.src = datos.tracks[0].album.images[0].url
    audio.src = datos.tracks[0].preview_url
}
