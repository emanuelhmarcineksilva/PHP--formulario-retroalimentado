<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>fomulario 3.0</title>
</head>
<body>
    <?php 
        // Capiturando os dados do formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get"> <!-- Aqui no echo $_SERVER['PHP_SELF'] é um link para a propria pagina, não colocamos index.php por questões de segurança, é mulhor escrever dessa forma -->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <input type="submit" value="Somar" id="enviar">
        </form>

        <?php print "Somando " . $valor1 . " com " . $valor2 . " temos "?>
        <h2>Resposta: <?=$valor1+$valor2?></h2>
    </main>
</body>

</html>
