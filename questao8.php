<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numeros_par">Digite um valor para ver seus valores perto do 1 até ele mesmo:</label>
    <input id="numeros_par" name="numeros_par" type="number">
    <button type="submit" name="verificar_pares">Enviar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_pares'])){
            $numero = $_POST['numeros_par'];
            for($i = 1; $i <= $numero; $i++){
                if($i % 2 == 0){
                    echo"O valor $i de $numero é par!";
                    echo'<br>';
                }
            }

        }

    }
    ?>
</body>
</html>