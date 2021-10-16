<?php  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tablero de administración</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">Panel de Administración</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Sidebar Toggle-->
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Tablero</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">Panel general</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Opciones
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="info_gral.php">Configuración general</a>
                                <a class="nav-link" href="info_ofertas_promo.php">Ofertas y Promociones</a>
                                <a class="nav-link" href="users.php">Usuarios</a>
                                <a class="nav-link" href="autorizacion.php">Autorización</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    <div id="layoutSidenav_content">
        <main>

            <div class="container-fluid px-4">
                <center>
                    <h1 class="mt-4">Editar información usuario</h1>
                    <h6>Todochef Teziutlán</h6>
                </center>
                <div class="mb-3">
                    <center><img src="edit.png" width="80" height="80">
                        <p>
                    </center>
                <div class="mb-3">
                    </center>
                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                        placeholder="Ingrese el nombre del usuario">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Ingrese el apellido paterno del usuario">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Ingrese el apellido materno del usuario">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Ingrese un nombre de usuario">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Ingrese una contraseña">
                </div>
                <center>
                    <div style="width:100%; height:100%">
                        <a class="btn btn-outline-success" href="users.php" role="button">Guardar cambios</a>
                        <a class="btn btn-outline-danger" href="users.php" role="button">Cancelar</a>
                        <p>
                </center>
            </div>
    </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>