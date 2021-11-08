<!doctype html5>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Pagina Web con Bootstrap</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="css/estilosPagina.css">
    
    <!-- Bootstrap core CSSsss -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/sidebars.css" rel="stylesheet">
  </head>
<body style="overflow-y: hidden">
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#" target="_blank">Hola !</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <marquee behavior="alternate" direction="right"><label for="">Bienvenido a mi Sistema hecho con BOOTSTRAP</label></marquee>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-4 mt-1 mb-1 text-muted">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-2 small">
          <li>
          <span class="iconify iconify2" data-icon="ion:menu" data-inline="false"></span>
            Menú
          </li>
        </ul>   
        </h6>
        <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#menuMensajes-collapse" aria-expanded="true">
          Menú de Mensajes
        </button>
        <div class="collapse show" id="menuMensajes-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
              <a id="pc" class="link-dark rounded" aria-current="page" href="alerta1.php" target="admin">
              <span class="iconify" data-icon="clarity:alert-line" data-inline="false"></span>
              Notificaciones y Alertas Normales
              </a>
            </li>
            <li>
              <a id="so" class="link-dark rounded" href="alerta2.php" target="admin">
              <span class="iconify" data-icon="ic:outline-notifications-active" data-inline="false"></span>
              Notificaciones y Alertas más cool
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#menuTablas-collapse" aria-expanded="false">
          Menú de Tablas
        </button>
        <div class="collapse" id="menuTablas-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
              <a id="usu" class="link-dark rounded" href="tabla1.php" target="admin">
                <span class="iconify" data-icon="bx:bx-table" data-inline="false"></span>
                Tabla 1
              </a>
            </li>
            <li>
              <a id="cus" class="link-dark rounded" href="#">
                <span class="iconify" data-icon="bx:bx-table" data-inline="false"></span>
                Tabla 2
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#vistas-collapse" aria-expanded="false">
          Vistas
        </button>
        <div class="collapse" id="vistas-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
              <a id="dtm" class="link-dark rounded" href="#">
              <span class="iconify" data-icon="line-md:document-report" data-inline="false"></span>
                Graficas
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mainCuepo">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom containerP">
      <a style="ext-decoration: none" href="javascript:void(0)" onclick="window.location.reload()"><label class="label">|- JOEL OMAR Hola como estas ... -|</label></a>
      </div>
      <div class=" containerS">
        <iframe class="row" src="Contenido.php" id="admin" name="admin" scrolling="si" height="100%" width="100%" frameborder="0" ></iframe>
      </div>
    </main>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </body>
