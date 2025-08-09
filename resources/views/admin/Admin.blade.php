<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VENNOT - Administrador</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png.png') }}">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <script src="https://kit.fontawesome.com/38beaf997f.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
                <div class="">
                    <img src="{{ asset('assets/logo.png.png') }}" style="width: 65px; height: auto;">
                </div>
                <div class="sidebar-brand-text mx-3">Vennot</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestor De Perfumes
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHombre"
                    aria-expanded="true" aria-controls="collapseHombre">
                    <i class="fas fa-spray-can"></i>
                    <span>Perfumes Maculinos</span>
                </a>
                <div id="collapseHombre" class="collapse" aria-labelledby="headingHombre"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones</h6>
                        <a class="collapse-item" href="{{ route('Registrar_perfum_hombre') }}">Registrar Perfume</a>
                        <a class="collapse-item" href="{{ route('Ver_Perfum_H') }}">Ver Perfumes</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMujer"
                    aria-expanded="true" aria-controls="collapseMujer">
                    <i class="fas fa-spray-can"></i>
                    <span>Perfumes Femeninos</span>
                </a>
                <div id="collapseMujer" class="collapse" aria-labelledby="headingMujer" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones</h6>
                        <a class="collapse-item" href="{{ route('Registrar_perfum_mujer') }}">Registrar Perfume</a>
                        <a class="collapse-item" href="{{ route('Ver_Perfum_M') }}">Ver Perfumes</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUnisex"
                    aria-expanded="true" aria-controls="collapseUnisex">
                    <i class="fas fa-spray-can"></i>
                    <span>Perfumes Unisex</span>
                </a>
                <div id="collapseUnisex" class="collapse" aria-labelledby="headingUnisex"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones</h6>
                        <a class="collapse-item" href="{{ route('Registrar_perfum_unisex') }}">Registrar Perfume</a>
                        <a class="collapse-item" href="{{ route('Ver_Perfum_U') }}">Ver Perfumes</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <div class="sidebar-heading">
                Gestor De Pedidos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-box"></i>
                    <span>Pedidos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones</h6>
                        <a class="collapse-item" href="{{ route('Pedido') }}">Registar Pedido</a>
                        <a class="collapse-item" href="{{ route('Ver_Pedido') }}">Ver Pedidos</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <!-- Notificaciones -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="notificacionesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell"></i>
                                @if (isset($stockBajo) && count($stockBajo) > 0)
                                    <span class="badge bg-danger">{{ count($stockBajo) }}</span>
                                @endif
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="notificacionesDropdown"
                                style="width: 300px;">
                                @if (isset($stockBajo) && count($stockBajo) > 0)
                                    <li class="dropdown-header">Stock bajo (menos de 20)</li>
                                    @foreach ($stockBajo as $item)
                                        <li>
                                            <div class="dropdown-item text-wrap">
                                                <strong>{{ ucfirst($item['tabla']) }}:</strong>
                                                {{ $item['nombre'] }}<br>
                                                <small>Cantidad: {{ $item['cantidad'] }}</small>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li><span class="dropdown-item text-muted">Sin notificaciones</span></li>
                                @endif
                            </ul>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            </a>



                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>

                                <!-- Logout directo sin modal -->
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                                <!-- Formulario oculto para logout -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="hero-section" style="background-image: url('{{ asset('assets/nube.jpg') }}');">
                        <div class="overlay-dark"></div>

                        <div class="hero-content">
                            <h1>BIENVENIDO A VENNOT</h1>
                            <h2>Tu espacio de gestión eficiente</h2>
                            <p><strong>Rol: Administrador.</strong> Lleva el control absoluto de tu inventario de
                                perfumes.<br>
                                Elegancia, orden y eficiencia en una sola plataforma.</p>
                        </div>

                    </div>

                    <style>
                        * {
                            margin: 0;
                            padding: 0;
                            box-sizing: border-box;
                        }

                        html,
                        body {
                            height: 100%;
                            font-family: 'Segoe UI', sans-serif;
                            background: #fff;
                            /* fondo blanco */
                        }

                        /* Sección principal con márgenes */
                        .hero-section {
                            position: relative;
                            width: calc(100% - 40px);
                            /* 20px a cada lado */
                            height: calc(100vh - 40px);
                            /* 20px arriba y abajo */
                            margin: 20px;
                            background-size: cover;
                            background-position: center;
                            background-repeat: no-repeat;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            text-align: center;
                            color: white;
                        }

                        /* Capa oscura y desenfoque */
                        .overlay-dark {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-color: rgba(0, 0, 0, 0.5);
                            backdrop-filter: blur(6px);
                            z-index: 0;
                        }

                        /* Contenido encima */
                        .hero-content {
                            position: relative;
                            z-index: 1;
                            padding: 20px;
                        }

                        .hero-content h1 {
                            font-size: 3rem;
                            font-weight: bold;
                            margin-bottom: 10px;
                        }

                        .hero-content h2 {
                            font-size: 1.8rem;
                            color: #d8c9ff;
                            margin-bottom: 20px;
                        }

                        .hero-content p {
                            font-size: 1.1rem;
                            color: #e8e8f4;
                            max-width: 600px;
                            margin: 0 auto;
                        }
                    </style>




                    <!-- Content Row -->
                    <div class="row">

                        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
                        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
                        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
                        <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
                        <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>


</body>

</html>
