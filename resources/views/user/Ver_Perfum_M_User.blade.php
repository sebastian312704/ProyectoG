<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VER PERFUMES FEMENINOS</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <script src="https://kit.fontawesome.com/38beaf997f.js" crossorigin="anonymous"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('index1') }}">
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
                    <span>Perfumes Masculinos</span>
                </a>
                <div id="collapseHombre" class="collapse" aria-labelledby="headingHombre"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones</h6>
                        <a class="collapse-item" href="{{ route('Ver_Perfum_H_User') }}">Ver Perfumes</a>
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
                        <a class="collapse-item" href="{{ route('Ver_Perfum_M_User') }}">Ver Perfumes</a>
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
                        <a class="collapse-item" href="{{ route('Ver_Perfum_U_User') }}">Ver Perfumes</a>
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
                        <a class="collapse-item" href="{{ route('Registrar_Pedido_User') }}">Registar Pedido</a>
                        <a class="collapse-item" href="{{ route('Ver_Pedido_User') }}">Ver Pedidos</a>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 text-gray-800" style="margin-left: 40px; margin-top: 20px;">VER PERFUMES
                            FEMENINOS</h1>
                    </div>

                    @if (session('Correcto'))
                        <div class="alert alert-success">{{ session('Correcto') }}</div>
                    @endif

                    @if (session('Incorrecto'))
                        <div class="alert alert-danger">{{ session('Incorrecto') }}</div>
                    @endif

                    <script>
                        let enlaceAEliminar = null;

                        function mostrarModal(elemento) {
                            enlaceAEliminar = elemento.getAttribute('href');
                            document.getElementById("modalConfirmacion").style.display = "block";
                        }

                        function cerrarModal() {
                            document.getElementById("modalConfirmacion").style.display = "none";
                            enlaceAEliminar = null;
                        }

                        function confirmarEliminacion() {
                            if (enlaceAEliminar) {
                                window.location.href = enlaceAEliminar;
                            }
                        }
                    </script>

                    <div class="modal fade" id="modalregistar" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registar datos del perfume
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('crud.create1') }}" method="post">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Casa</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="txtcasa">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="txtnombre">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="txtcantidad">
                                        </div>

                                        <div class="mb-3">
                                            <label for="tipo" class="form-label">Tipo</label>
                                            <select class="form-control" id="tipo" name="txttipo" required>
                                                <option hidden value="">Escoge un tipo</option>
                                                <option value="Perfume">Perfume</option>
                                                <option value="Perfumero">Perfumero</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="frasco" class="form-label">Frasco</label>
                                            <select class="form-control" id="frasco" name="txtfrasco" required>
                                                <option hidden value="">Escoge un frasco</option>
                                                <option value="50">50 ml</option>
                                                <option value="100">100 ml</option>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="date" class="form-control" id="fecha"
                                                name="txtfecha">
                                        </div>

                                        <div class="mb-3">
                                            <label for="hora" class="form-label">Hora</label>
                                            <input type="time" class="form-control" id="hora"
                                                name="txthora">
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Registar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5 table-responsive">
                    
                    <table class="table table-striped table-bordered table-hover" style="margin-top: -20px;">
                        <thead class="bg-primary text-white">
                            <tr>

                                <th scope="col">CASA</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">CANTIDAD</th>
                                <th scope="col">TIPO DE PERFUME</th>
                                <th scope="col">FRASCO EN ML</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">HORA</th>

                        <tbody class="table-group-divider">
                            @foreach ($datos as $key => $item)
                                <tr>

                                    <td>{{ $item->casa }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>{{ $item->tipo_perfume }}</td>
                                    <td>{{ $item->frasco_ml }}</td>
                                    <td>{{ $item->fecha }}</td>
                                    <td>{{ $item->hora }}</td>
            
                                </tr>
                        </tbody>

                        <!-- Modal -->
                        <div class="modal fade" id="modaleditar{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos del
                                            perfume</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('crud.update1') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="txtcodigo" value="{{ $item->id }}">

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Casa</label>
                                                <input type="text" class="form-control" name="txtcasa"
                                                    value="{{ old('txtcasa', $item->casa) }}">
                                                @error('txtcasa')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                @enderror


                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="txtnombre"
                                                    value="{{ old('txtnombre', $item->nombre) }}">
                                                @error('txtnombre')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                @enderror


                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Cantidad</label>
                                                        <input type="text" class="form-control" name="txtcantidad"
                                                            value="{{ old('txtcantidad', $item->cantidad) }}">
                                                        @error('txtcantidad')
                                                            <div class="text-danger small">{{ $message }}</div>
                                                        @enderror


                                                        <div class="mb-3">
                                                            <label for="tipo" class="form-label">Tipo</label>
                                                            <select class="form-control" name="txttipo">
                                                                <option hidden value="">Escoge un tipo</option>
                                                                <option value="Perfume"
                                                                    {{ old('txttipo', $item->tipo_perfume) == 'Perfume' ? 'selected' : '' }}>
                                                                    Perfume</option>
                                                                <option value="Perfumero"
                                                                    {{ old('txttipo', $item->tipo_perfume) == 'Perfumero' ? 'selected' : '' }}>
                                                                    Perfumero</option>
                                                            </select>
                                                            @error('txttipo')
                                                                <div class="text-danger small">{{ $message }}</div>
                                                            @enderror

                                                            <div class="mb-3">
                                                                <label for="frasco"
                                                                    class="form-label">Frasco</label>
                                                                <select class="form-control" name="txtfrasco">
                                                                    <option hidden value="">Escoge un frasco
                                                                    </option>
                                                                    <option value="50"
                                                                        {{ old('txtfrasco', $item->frasco_ml) == '50' ? 'selected' : '' }}>
                                                                        50 ml</option>
                                                                    <option value="100"
                                                                        {{ old('txtfrasco', $item->frasco_ml) == '100' ? 'selected' : '' }}>
                                                                        100 ml</option>
                                                                </select>
                                                                @error('txtfrasco')
                                                                    <div class="text-danger small">{{ $message }}
                                                                    </div>
                                                                @enderror

                                                                <div class="mb-3">
                                                                    <label for="fecha"
                                                                        class="form-label">Fecha</label>
                                                                    <input type="date" class="form-control"
                                                                        name="txtfecha"
                                                                        value="{{ old('txtfecha', $item->fecha) }}">
                                                                    @error('txtfecha')
                                                                        <div class="text-danger small">{{ $message }}
                                                                        </div>
                                                                    @enderror


                                                                    <div class="mb-3">
                                                                        <label for="hora"
                                                                            class="form-label">Hora</label>
                                                                        <input type="time" class="form-control"
                                                                            name="txthora"
                                                                            value="{{ old('txthora', $item->hora) }}">
                                                                        @error('txthora')
                                                                            <div class="text-danger small">
                                                                                {{ $message }}</div>
                                                                        @enderror

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-primary"
                                                                                data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Modificar</button>
                                                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </tr>
                        @endforeach

                        @if ($errors->any())
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    let modalId = 'modaleditar{{ old('txtcodigo') }}';
                                    let modal = new bootstrap.Modal(document.getElementById(modalId));
                                    modal.show();
                                });
                            </script>
                        @endif

                        </thead>
                    </table>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
                </script>

</body>

</html>
