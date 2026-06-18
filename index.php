<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/18717/18717370.png">
    <title>Conta bancária</title>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'];
    ?>
    <main>
        <h1>Saque eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você quer sacar? <sup>*</sup></label>
            <input type="number" name="saque" id="saque" required step="5" value="<?=$saque?>">
            <p>Notas disponíveis: R$ 100, R$ 50, R$ 10, R$ 5</p>

        </form>
    </main>
</body>
</html>