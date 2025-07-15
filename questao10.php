<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10 - PHP</title>
</head>
<body>
<form method="POST" action="">
    <label for="numero_fibonacci">Escreva um valor para ver a sua sequência de Fibonacci</label>
    <input type="number" id="numero_fibonacci" name="numero_fibonacci">
    <button type="submit" name="verificar_numero_fibonacci">Enviar</button>
</form>    
<?php
$numero = 0;
$numero = $_POST['numero_fibonacci'];
echo"O número $numero na sequência de Fibonacchi é: " . fibonacci($numero);

function fibonacci($numero){
    if($numero == 0 || $numero == 1)
        return $numero;
    else   
        return (fibonacci($numero - 1) + fibonacci($numero - 2));
}
?>
</body>
</html>