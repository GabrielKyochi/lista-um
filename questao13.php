<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="valor_celcius">Escreva um valor em Celcius para converter em Fahrenheit:</label>
    <input id="valor_celcius" name="valor_celcius" type="number">
    <button type="submit" name="transformar_celcius">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['transformar_celcius'])){
            $numero = $_POST['valor_celcius'];
            $numero_fahrenheit = ($numero * 9/5) + 30;

            echo"O seu valor em Fahrenheit é: ". $numero_fahrenheit;
        }
    }
    ?>
</body>
</html>