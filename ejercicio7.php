<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio de Operadores Relacionales</h1>
    
    <form action="ejercicio7.php" method="post">
         Valor1:
        <input type="text" name="valor1" id="">
        <br>
        <br>
        Valor2:
        <input type="text" name="valor2" id="">
        <br>
        <br>
        <input type="submit" value="Enviar">

    </form>

    <?php
    if($_POST){

        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];

        if($valor1>$valor2){
            echo '<br>El valor 1 ('.$valor1.') es mayor que el valor 2 ('.$valor2.')';
        } else if($valor2>$valor1){
            echo '<br>El valor 2 ('.$valor2.') es mayor que el valor 1 ('.$valor1.')';
        } else if($valor1=$valor2){
            echo '<br>El valor 1 ('.$valor1.') es igual que el valor 2 ('.$valor2.')';
        }
    }
    ?>
    
</body>
</html>