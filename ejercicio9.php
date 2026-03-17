<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio condicional Switch</h1>
    
    <form action="ejercicio9.php" method="post">
         Valor1:
        <input type="submit" name="btnvalor" value="1">
        <br>
        <br>
        Valor2:
        <input type="submit" name="btnvalor" value="2">
        <br>
        <br>
        Valor3:
        <input type="submit" name="btnvalor" value="3">

    </form>

    <?php
    if($_POST){

        $valor=$_POST['btnvalor'];

        switch($valor){
            case 1: 
                echo '<br>Se presiono el botón 1';
            break;

            case 2;
                echo '<br>Se presiono el botón 2';
            break;

            case 3:
                echo '<br>Se presiono el botón 3';
            break;
        }
    }

    ?>
    
</body>
</html>