<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação Positivo/Negativo/Neutro</title>
</head>
<body>
    <h1>Verificação Positivo/Negativo/Neutro</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        function verificarSinal($numero) {
            if ($numero > 0) {
                return "positivo";
            } elseif ($numero < 0) {
                return "negativo";
            } else {
                return "neutro";
            }
        }

        $sinal = verificarSinal($numero);

        echo "<p>O número $numero é $sinal.</p>";
    }
    ?>
</body>
</html>
