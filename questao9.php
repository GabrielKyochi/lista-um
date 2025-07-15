<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero1">Escreva um primeiro número:</label>
    <input type="number" id="numero1" name="numero1">
    <label for="numero2">Escreva o segundo número:</label>
    <input type="number" id="numero2" name="numero2">
    <button type="submit" name="verificar_soma_entre_numeros">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_soma_entre_numeros'])){
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $valores_entre_1_e_2 = 0;

            for($i = $numero1 + 1; $i < $numero2; $i++){
                $valores_entre_1_e_2 += $i;
            }
            echo'<br>';
            echo"A soma dos valores entre $numero1 e $numero2 é: $valores_entre_1_e_2";
        }
    }
    ?>
</body>
</html>