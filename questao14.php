<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <label for="ano_bissexto">Escreva um ano para verificar se ele é bissexto:</label>
    <input id="ano_bissexto" name="ano_bissexto" type="number">
    <button type="submit" name="verificar_bissexto">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_bissexto'])){
            $numero = $_POST['ano_bissexto'];
            if($numero % 4 == 0){
                echo"O ano $numero é bissexto!";
            } else{
                echo"O ano $numero não é bissexto!";
            }
        }   
    }
    ?>
</body>
</html>