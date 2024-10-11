<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Equipe</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/equipe.js') }}"></script>
</head>

<body>
    <h1>Gerar Equipe</h1>
    <form action="{{ route('LicitacoesSalvar') }}" method="POST">
        @csrf
        <label for="objeto_contratacao">Objeto da Contratação:</label>
        <input type="text" id="objeto_contratacao" name="objeto_contratacao" value="{{ old('objeto_contratacao') }}">
        {{-- value="{{ old('objeto_contratacao') }} = pega o input antigo e mantem --}}
        <button id="gerarEquipeBtn" type="submit">Gerar Equipe</button>
    </form>

    {{-- Codigo para exibir mensagem de error captada no request --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif

    @if (session('success'))
        {{ session('success') }}
    @endif

    <div id="resultado" style="margin-top: 20px;">

    </div>

    <script src="{{ asset('js/equipe.js') }}"></script>
</body>

</html>
