<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero_par">Digite um número para verificar se ele é par</label>
    <input type="number" name="numero_par" id="numero_par" required>
    <button type="submit" name="verificar_par">Enviar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_par'])){

            $numero = $_POST['numero_par'];
            $ehPar = false;

            if($numero %2 == 0){
                $ehPar = true;
            }
            echo "O numero $numero é ". ($ehPar ? 'par':'não é par');
        }
    }
    ?>
    
</body>
</html>