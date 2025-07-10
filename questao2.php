<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero_tabuada">Digite um número para verificar a tabuada de um número:</label>
    <input type="number" id="numero_tabuada" name="numero_tabuada">
    <button type="submit" name="verificar_tabuada">Enviar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_tabuada'])){

                $numero = $_POST['numero_tabuada'];

                for($i = 0; $i <= 10; $i++){
                    $resultado = $numero * $i;
                    echo "$numero * $i = ". $resultado; 
                    echo '<br>';
                }
            }
        }
    ?>
</body>
</html>