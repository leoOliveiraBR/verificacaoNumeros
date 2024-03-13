<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação se Número é Redondo</title>
</head>
<body>
    <h1>Verificação se Número é Redondo</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        function ehRedondo($numero) {
            return is_int($numero / 10);
        }

        if (ehRedondo($numero)) {
            echo "<p>O número $numero é redondo.</p>";
        } else {
            echo "<p>O número $numero não é redondo.</p>";
        }
    }
    ?>
</body>
</html>
