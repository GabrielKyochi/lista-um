<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero_fatorial">Digite um número para verificar o seu fatorial:</label>
    <input name="numero_fatorial" id="numero_fatorial" type="number">
    <button type="submit" name="verificar_fatorial">Enviar</button>
    </form>
    <?php
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
             if(isset($_POST['verificar_fatorial'])){
                $number = $_POST['numero_fatorial'];
                $fatorial = 1;
    
                for($i = $number; $i >= 1; $i--){
                $fatorial *= $i;
                    echo "O fatorial do $number é: " . $fatorial; 
                    echo '<br>';
                }
             }
          }
    ?>
</body>
</html>