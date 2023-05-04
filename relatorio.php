<!DOCTYPE html>
<html>

<head>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Relatórios</title>
  <!-- Sweet Alert -->
  <link type="text/css" href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- Sweet Alerts 2 -->
  <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>

<body>
  <?php
  session_start();
  if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location: login.html');
  }

  $logado = $_SESSION['login'];
  // chekaro tipo do usuário
  if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'suporte') {
    echo "<script>
  Swal.fire({
      title: 'Acesso Negado!',
      text: 'Você não tem acesso a esse menu.',
      icon: 'error'
  }).then((result) => {
      window.location.href = 'home.php';
  });
</script>";
  }
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Sweet Alert -->
  <link type="text/css" href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="css/volt.css" rel="stylesheet">

</head>

<body>


  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="#">
      <img class="navbar-brand-dark" src="assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="img/149071.png" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
          </div>

        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="#">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <h4 style="color: #f46524;">Sistema P.X</h4>
        <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

        <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-app">
            <span>
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="#">
                  <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                </svg>
              </span>
              <span class="sidebar-text">Gerência</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="#">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="chamwynadm.php">
                  <span class="sidebar-text">Painel Principal</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="usuarios.php">
                  <span class="sidebar-text">Gerenciar Usuários</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="inserirtabela.php">
                  <span class="sidebar-text">Consultar/Registrar</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item ">
                <a class="nav-link" href="alterarregistros.php">
                  <span class="sidebar-text">Gerenciar Registros</span>
                </a>
              </li>
              <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            </ul>
          </div>
        </li>
        <?php include 'nav.php'; ?>
        
        <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
        <br>
      </ul>
    </div>
  </nav>
  <main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
      <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
            <!-- Titulo da página -->
            <h1>Relatórios</h1>
            <!-- / Titulo da página -->
          </div>
          <div class="d-flex align-items-center">
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center">
            </li>
            <li class="nav-item dropdown ms-lg-3">
              <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="media d-flex align-items-center">
                  <img class="avatar rounded-circle" alt="Image placeholder" src="img/149071.png">
                  <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small fw-bold text-gray-900">
                      <?php
                      echo "<h4> $logado </h4>"
                      ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">

                <a class="dropdown-item d-flex align-items-center" href="logoff.php">
                  <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="#">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                  </svg>
                  Logoff
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <div role="separator" class="dropdown-divider my-1"></div>
    <br>
    <div class="container">
      <div class="card-block" style="display: inline-block; border-radius: 10px; width: 50%;">
        <div class="card shadow border-0 text-left p-3">
          <h3 class="card-title">Relatório por Data:</h3>
          <br>
          <form method="post" action="relatorios/relatoriodata.php">
            <label for="data">Buscar por Data:</label>
            <input class="borda-arredondadas" type="date" id="data" name="data">
            <button class="btn btn-primary" type="submit">Buscar</button>
            <br><br>
            <h4> Esse relatório, busca quais as estações foram feitas no dia, por ET, Ocorrência, e a quantidade de vezes no dia </h4>
          </form>
        </div>
      </div>

      <!--divisa das páginas-->
      <div class="card-block" style="display: inline-block; border-radius: 10px; width: 50%;">
        <div class="card shadow border-0 text-left p-3">
          <h3 class="card-title">Relatório por REQ:</h3>
          <br>
          <form method="post" action="relatorios/relatorioreq.php">
            <label for="req">Buscar por REQ:</label>
            <input class="borda-arredondadas" type="text" id="req" name="req" placeholder="Informe a REQ">
            <button class="btn btn-primary" type="submit">Buscar</button>
            <br><br>
            <h4> Esse relatório busca uma Req específica, com a ET, Ocorrência e o nome do Suporte que registrou.</h4>
          </form>
        </div>
      </div>

      <!--divisa das páginas-->
      <div class="card-block" style="display: inline-block; border-radius: 10px; width: 50%;">
        <div class="card shadow border-0 text-left p-3">
          <h3 class="card-title">Relatório por Estação:</h3>
          <br>
          <form action="relatorios/relatorioet.php" method="POST">
            <label for="et">Buscar por ET:</label>
            <input class="borda-arredondadas" type="text" name="et" id="et" placeholder="Nome Lógico">
            <button class="btn btn-primary" type="submit" name="submit">Buscar</button>
            <br><br>
            <h4> Esse relatório busca toda relação que a ET teve nos registros </h4>
          </form>
        </div>
      </div>

      <!--divisa das páginas-->
      <div class="card-block" style="display: inline-block; border-radius: 10px; width: 50%;">
        <div class="card shadow border-0 text-left p-3">
          <h3 class="card-title">Relatório por Ocorrência:</h3>
          <br>
          <form action="relatorios/relatoriomotivo.php" method="POST">
            <label for="et">Selecione a Ocorrência</label>
            <select class="form-select2 mb-0" name="motivo" id="motivo">
              <option value=""></option>
              <option value="BAIXA DE IMAGEM">BAIXA DE IMAGEM</option>
              <option value="TELA AZUL">TELA AZUL</option>
              <option value="FORA DO DOMINIO">FORA DO DOMINIO</option>
              <option value="REPARO AUTOMÁTICO">REPARO AUTOMÁTICO</option>
              <option value="SUJEIRA / LIMPEZA">SUJEIRA / LIMPEZA</option>
              <option value="MONITOR COM DEFEITO">MONITOR COM DEFEITO</option>
              <option value="NAO LIGA">NÃO LIGA</option>
              <option value="LENTIDAO">LENTIDAO</option>
              <option value="PROBLEMAS INTERNOS">PROBLEMAS INTERNOS</option>
            </select>
            <button class="btn btn-primary" type="submit" name="submit">Buscar</button>
            <br><br>
            <h4> Esse relatório busca toda relação de ocorrências quantidades etc... </h4>
          </form>
        </div>
      </div>
    </div>


    <?php include 'footer.php'; ?>

  </main>

  <!-- Core -->
  <script src="vendor/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>

  <!-- Slider -->
  <script src="vendor/nouislider/distribute/nouislider.min.js"></script>

  <!-- Smooth scroll -->
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Charts -->
  <script src="vendor/chartist/dist/chartist.min.js"></script>
  <script src="vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

  <!-- Datepicker -->
  <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Sweet Alerts 2 -->
  <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Notyf -->
  <script src="vendor/notyf/notyf.min.js"></script>

  <!-- Simplebar -->
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="assets/js/volt.js"></script>


  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-primary',
        cancelButton: 'btn btn-gray'
      },
      buttonsStyling: false
    });

    // SweetAlert 2
    document.getElementById('basicAlert').addEventListener('click', function() {
      swalWithBootstrapButtons.fire(
        'Basic alert',
        'You clicked the button!'
      )
    });

    document.getElementById('infoAlert').addEventListener('click', function() {
      swalWithBootstrapButtons.fire(
        'Info alert',
        'You clicked the button!',
        'info'
      )
    });

    document.getElementById('successAlert').addEventListener('click', function() {
      swalWithBootstrapButtons.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: 'Chamado Lançado com sucesso',
        showConfirmButton: true,
        timer: 3500
      })
    });

    document.getElementById('warningAlert').addEventListener('click', function() {
      swalWithBootstrapButtons.fire(
        'Warning alert',
        'You clicked the button!',
        'warning'
      )
    });

    document.getElementById('dangerAlert').addEventListener('click', function() {
      swalWithBootstrapButtons.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>'
      })
    });

    document.getElementById('questionAlert').addEventListener('click', function() {
      swalWithBootstrapButtons.fire(
        'The Internet?',
        'That thing is still around?',
        'question'
      );
    });

    document.getElementById('notifyTopLeft').addEventListener('click', function() {
      const notyf = new Notyf({
        position: {
          x: 'left',
          y: 'top',
        },
        types: [{
          type: 'info',
          background: '#0948B3',
          icon: {
            className: 'fas fa-info-circle',
            tagName: 'span',
            color: '#fff'
          },
          dismissible: false
        }]
      });
      notyf.open({
        type: 'info',
        message: 'Send us <b>an email</b> to get support'
      });
    });

    document.getElementById('notifyTopRight').addEventListener('click', function() {
      const notyf = new Notyf({
        position: {
          x: 'right',
          y: 'top',
        },
        types: [{
          type: 'error',
          background: '#FA5252',
          icon: {
            className: 'fas fa-times',
            tagName: 'span',
            color: '#fff'
          },
          dismissible: false
        }]
      });
      notyf.open({
        type: 'error',
        message: 'This action is not allowed.'
      });
    });

    document.getElementById('notifyBottomLeft').addEventListener('click', function() {
      const notyf = new Notyf({
        position: {
          x: 'left',
          y: 'bottom',
        },
        types: [{
          type: 'warning',
          background: '#F5B759',
          icon: {
            className: 'fas fa-exclamation-triangle',
            tagName: 'span',
            color: '#fff'
          },
          dismissible: false
        }]
      });
      notyf.open({
        type: 'warning',
        message: 'This might be dangerous.'
      });
    });

    document.getElementById('notifyBottomRight').addEventListener('click', function() {
      const notyf = new Notyf({
        position: {
          x: 'right',
          y: 'bottom',
        },
        types: [{
          type: 'info',
          background: '#262B40',
          icon: {
            className: 'fas fa-comment-dots',
            tagName: 'span',
            color: '#fff'
          },
          dismissible: false
        }]
      });
      notyf.open({
        type: 'info',
        message: 'John Garreth: Are you ready for the presentation?'
      });
    });
  </script>

</body>

</html>