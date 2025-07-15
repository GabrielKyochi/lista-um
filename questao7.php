<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7 - PHP</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_perfeito">Escreva um numero para verificar se ele é perfeito:</label>
        <input type="number" id="numero_perfeito" name="numero_perfeito">
        <button type="submit" name="verificar_numero_perfeito">Enviar</button>
    </form>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_numero_perfeito'])){

            $numero = $_POST['numero_perfeito'];
            $soma = 0;

            for($i = 1; $i < $numero; $i++){
                $resultado = $numero / $i;
                if($numero % $i == 0){
                    $soma += $i;
                    echo"$numero / $i = ". $resultado;
                    echo'<br>';
                }
            }
            echo'<br>';
             if($soma == $numero){
                        echo"O $numero é perfeito!";
                    } else{
                        echo"O $numero não é perfeito!";
                    }
        }


    }

    ?>
</body>
</html>