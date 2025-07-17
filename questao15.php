<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15 - PHP</title>
</head>
<body>
    <form action="" method="POST">
    <label for="valor_peso">Escreva o seu peso para verificar sua categoria:</label>
    <input type="number" step=".01" id="valor_peso" name="valor_peso">
    <label for="valor_altura">Escreva a sua altura para verificar sua categoria:</label>
    <input type="number" step=".01" id="valor_altura" name="valor_altura">
    <button type="submit" name="verificar_categoria">Enviar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_categoria'])){
            $altura = $_POST['valor_altura'];
            $peso = $_POST['valor_peso'];
            $calculo_altura = $altura * $altura;
            $final_imc = $peso / $calculo_altura; 

            if($final_imc < 18.5){
                echo"Você está na categoria abaixo do peso!";
            } else if($final_imc >= 18.5 & $final_imc < 24.9){
                echo"Você está na categoria peso normal!";
            } else if($final_imc >= 25 & $final_imc < 29.9){
                echo"Você está na categoria sobrepeso!";
            } else{
                echo"Você está na categoria obesidade!";
            }
        }
    }
    ?>
</body>
</html>