<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="palavra_vogais">Escreva uma palavra para exibir a quantidade de vogais:</label>
    <input name="palavra_vogais" id="palavra_vogais" type="text">
    <button type="submit" name="verificar_vogais">Enviar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_vogais'])){
            $numero_vogais = 0;
            $palavra = $_POST['palavra_vogais'];
            $vetor = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
            for($i = strlen($palavra) - 1; $i >= 0; $i--){
                for($j = count($vetor) - 1; $j >= 0; $j--){
                    if($vetor[$j] == $palavra[$i]){
                        $numero_vogais = $numero_vogais + 1;
                    }
                }
            }
            echo"O numero de vogais dessa palavra é: ". $numero_vogais;
        }
    }
    ?>
</body>
</html>