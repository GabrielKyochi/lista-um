<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="palavra_palindroma">Escreva uma palavra para verificar se ele é palíndroma:</label>
    <input type="text" id="palavra_palindroma" name="palavra_palindroma">
    <button type="input" name="verificar_palavra_palindroma">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_palavra_palindroma'])){
            $palavra = $_POST['palavra_palindroma'];
            if(strrev($palavra) == $palavra){
                echo"A palavra $palavra é palíndroma!";
            } else{
                echo"A palavra $palavra não é palíndroma!";
            }
        }
    }
    ?>
    
</body>
</html>