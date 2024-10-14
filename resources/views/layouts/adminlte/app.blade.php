<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Menu Lateral</title>
    <!-- Link para o CSS do AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Link para os ícones do FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Wrapper -->
    <div class="wrapper">

        @include('layouts.adminlte.nav')

        <!-- Menu Lateral (Sidebar) -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Logo do painel -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">AdminLTE</span>
            </a>

            <!-- Menu -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Item do menu -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Início</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Sobre</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>Serviços</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Contato</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Conteúdo da Página -->
        <div class="content-wrapper">
            <!-- Cabeçalho de Conteúdo -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Dashboard <small>Painel de Controle</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conteúdo Principal -->
            <section class="content">
                <div class="container">

                </div>
            </section>
        </div>

        <!-- Rodapé -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Versão</b> 3.2.0
            </div>
            <strong>&copy; 2024 <a href="#">Meu Site</a>.</strong> Todos os direitos reservados.
        </footer>
    </div>

    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    @section('scripts')
        <script src="{{ asset('js/equipe.js') }}"></script>
    @endsection

</body>

</html>
