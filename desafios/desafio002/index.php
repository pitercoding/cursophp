<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $naleatorio = mt_rand($min, $max);
            echo "<p>Gerando um número aleatório entre $min e $max... <br>O valor gerado foi: <strong>$naleatorio</strong>.</p>";
        ?>
        <button onclick="javascript:window.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>