<!doctype html>
<html lang="es">

<head>
  <title>Spotify</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-light">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><Strong>Consumiendo SPOTIFY...</Strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Artistas</strong>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item active" href="index.php">Bad Bunny</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="Alcolirykoz.php">Alcolirykoz</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="granuja.php">Granuja</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center text-danger mt-5">Bad Bunny</h1>
          <div class="alert alert-success text-center" role="alert">
            Refrescar la página mínimo 2 veces para garantizar que cargue la multimedia
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3" id="fila">
      </div>
    </div>
  </main>
  <footer class="bg-danger text-center text-white mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card mb-5 mt-5 bg-secondary rounded-pill">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-3 mt-3 text-warning">
                  <img src="https://github.com/carlitosSoporte/servidorArchivos/blob/main/fotosPortafolio/creador.jpeg?raw=true" alt="creador" class="w-100 img-fluid rounded-circle mt- mb-3">

                </div>
                <div class="col-md-3 mt-5 text-warning">
                  <p><i class="bi bi-emoji-sunglasses-fill"></i> <strong>Carlos Andres Diaz Aguirre &copy;</strong></p>
                  <p><i class="bi bi-envelope-fill"></i> <strong>andrez1915@gmail.com</strong></p>
                  <p><i class="bi bi-geo-alt-fill"></i> <strong>Medellin - Colombia</strong></p>
                  <p><i class="bi bi-calendar3"></i>
                    <strong>20<?= Date("y") ?></strong>
                  </p>
                </div>
                <div class="col-md-3 mt-4 text-warning">
                  <div class="row mb-3">
                    <div class="col">
                      <a name="" id="" class="btn btn-outline-warning rounded-circle" href="" role="button"><i class="bi bi-linkedin"></i><strong> Linkedin</strong></a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <a name="" id="" class="btn btn-outline-warning rounded-circle" href="" role="button"><i class="bi bi-twitter"></i><strong> Twitter</strong></a>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <a name="" id="" class="btn btn-outline-warning rounded-circle" href="" role="button"><i class="bi bi-facebook"></i><strong> Facebook</strong></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <a name="" id="" target="_blank" class="btn btn-outline-warning rounded-circle" href="https://github.com/carlitosSoporte" role="button"><i class="bi bi-github"></i></i><strong>
                          Github</strong></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="consumidor.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>