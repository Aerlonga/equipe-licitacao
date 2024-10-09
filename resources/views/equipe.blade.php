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
    
    <!-- Campo para inserir o objeto da contratação -->
    <label for="objeto_contratacao">Objeto da Contratação:</label>
    <input type="text" id="objeto_contratacao" name="objeto_contratacao">

    <!-- Botão para gerar a equipe -->
    <button id="gerarEquipeBtn">Gerar Equipe</button>

    <!-- Div onde a equipe será exibida -->
    <div id="resultado" style="margin-top: 20px;">
        <!-- O resultado será inserido aqui -->
    </div>

    <script src="{{ asset('js/equipe.js') }}"></script>
</body>
</html>
