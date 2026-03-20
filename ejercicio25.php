<?php

    $txt_nombre ='';

    if($_POST){
        $txt_nombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php
        if($_POST){
            echo '<strong>Hola: </strong>'.$txt_nombre;
        }
    ?>

    <form action='ejercicio25.php' method='POST'>

    <input type='text' name='txtnombre' id=''>

    <input type='submit' value='Enviar información'>


    </form>
</body>
</html>