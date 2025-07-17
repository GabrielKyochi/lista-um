<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 16 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="nome">Escreva o seu nome:</label>
    <input type="text" id="nome_votar" name="nome_votar">
    <label for="idade_votar">Escreva a sua idade:</label>
    <input type="text" id="idade_votar" name="idade_votar">
    <button type="submit" name="verificar_votar">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['verificar_votar'])){
            $idade = $_POST['idade_votar'];
            $nome = $_POST['nome_votar'];

            if($idade > 16){
                echo"$nome, você pode votar!";
            } else{
                echo"$nome, você não pode votar!";
            }
        }
    }
    ?>
</body>
</html>