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
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Saque eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você quer sacar? <sup>*</sup></label>
            <input type="number" name="saque" id="saque" required step="5" value="<?=$saque?>">
            <p><sup>*</sup> Notas disponíveis: R$ 100, R$ 50, R$ 10, R$ 5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
    $resto = $saque;
    $tot100 = floor($resto / 100);
    $resto %= 100;


    $tot50 = floor($resto / 50);
    $resto %= 50;

    $tot10 = floor($resto / 10);
    $resto %= 10;

    $tot5 = floor($resto / 5);
    $resto %= 5;

    $tot1 = floor($resto / 1);
    $resto %= 1;
    
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, "2", ",",".")?> realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas</p>
        <ul>
            <li><img src="img/importante/100-reais.jpg" alt="100real" class="nota"> x<?=$tot100?></li>
            <li><img src="img/importante/50-reais.jpg" alt="50real" class="nota"> x<?=$tot50?></li>
            <li><img src="img/importante/10-reais.jpg" alt="50real" class="nota"> x<?=$tot10?></li>
            <li><img src="img/importante/5-reais.jpg" alt="5real" class="nota"> x<?=$tot5?></li>
            <li><img src="img/importante/1-real.jpg" alt="1real" class="nota">x <?=$tot1?></li>
        </ul>
    </section>
</body>
</html>