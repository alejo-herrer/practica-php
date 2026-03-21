<?php

    //EJERCICIO CON INPUT

    $txt_nombre ='';
    $rdglenguaje='';

    if($_POST){
        $txt_nombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
        $rdglenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

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
            echo '<strong>Hola </strong>'.$txt_nombre.'<strong>, te gusta </strong>'.$rdglenguaje;
        }
    ?>

    <form action='ejercicio26.php' method='POST'>

    Nombre: <br/>
    <input type='text' name='txtnombre' id=''>
    <br/>
    Te gusta: <br/>
    <br/> PHP: <input type="radio" <?php echo ($rdglenguaje=="PHP")?"checked":""; ?> name='lenguaje' value='PHP' id=''>
    <br/> HTML: <input type="radio" <?php echo ($rdglenguaje=="HTML")?"checked":""; ?> name='lenguaje' value='HTML' id=''>
    <br/> CSS: <input type="radio" <?php echo ($rdglenguaje=="CSS")?"checked":""; ?> name='lenguaje' value='CSS' id=''>

    <input type='submit' value='Enviar información'>

    </form>
</body>
</html>