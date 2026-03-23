<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de IMC</title>
</head>
<body>
    <h1>Cadastro de aluno</h1>
    <form method='post' action='/imc/salvar'>
        @csrf
        <p>Peso:</p><br>
        <input type="text" name="peso"><br>
        <p>Altura:</p> <br>
        <input type="number" name="altura"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
