<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero_tipo">Escreva um número para verificar se ele é positivo, negativo ou zero:</label>
    <input type="number" id="numero_tipo" name="numero_tipo" required>
    <button name="verificar_tipo">Enviar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
              if(isset($_POST['verificar_tipo'])){
                $numero = $_POST['numero_tipo'];

                if($numero > 0){
                    echo"O número $numero é positivo!";
                }else if($numero < 0){
                    echo"O número $numero é negativo!";
                }else{
                    echo"O número $numero é 0!"; 
                }
            }
        }
    ?>
    
</body>
</html>