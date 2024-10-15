@extends('layouts.adminlte.app')

@section('titulo-pagina')
    Cadastrar Gestor
@endsection


@section('conteudo-pagina')
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

@endsection

@section('scripts')
    <script src="{{ asset('js/equipe.js') }}"></script>
@endsection
