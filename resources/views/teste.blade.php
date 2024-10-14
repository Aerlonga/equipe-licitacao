<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Menu Lateral</title>
    <!-- Link para o CSS do AdminLTE -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <!-- Link para os ícones do FontAwesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Wrapper -->
    <div class="wrapper">
        @include('layouts.adminlte.nav')
        @include('layouts.adminlte.sidebar')
        @include('layouts.adminlte.conteudo')
        @include('layouts.adminlte.rodape')
    </div>

    <!-- Scripts JS -->
    <script src="{{ asset('resources/vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('resources/vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @yield('scripts')
</body>

@section('scripts')
    <script src="{{ asset('js/equipe.js') }}"></script>
@endsection
</html>
