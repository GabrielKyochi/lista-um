<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero_divisao">Digite um número para ver os seus divisíveis:</label>
    <input name="numero_divisao" id="numero_divisao" type="number">
    <button type="submit" name="verificar_divisao">Enviar</button>
    </form>

    <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_divisao'])){

                $numero = $_POST['numero_divisao'];

                for($i = 1; $i <= $numero; $i++){
                    $resultado = $numero / $i;
                    if($numero % $i == 0){
                        echo "$numero / $i = ". $resultado;
                        echo'<br>';
                    }
                }
            }
        }
    ?>
</body>
</html>